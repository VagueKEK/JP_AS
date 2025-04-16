<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\ReservationForm;

class ReservationCtrl {
    private $form;

    public function __construct() {
        $this->form = new ReservationForm();
    }

    public function action_reservationShow() {
        $this->generateView();
    }

    public function action_reservation() {
        if (!SessionUtils::load("user", true)) {
            $this->generateView();
            return;
        }

        if ($this->validate()) {
            try {
                $userId = SessionUtils::load("user", true)->id;

                // Dodanie rezerwacji do bazy
                App::getDB()->pdo->beginTransaction();

                App::getDB()->insert("reservations", [
                    "user_id" => $userId,
                    "date" => $this->form->date,
                    "time" => $this->form->time,
                    "number_of_people" => $this->form->number_of_people,
                    "status" => 'Oczekujące',
                    "created_by_user_id" => $userId,
                    "modified_by_user_id" => $userId
                ]);

                $reservationId = App::getDB()->id();

                if ($reservationId === 0) {
                    throw new \Exception("Nie udało się dodać rezerwacji do bazy danych.");
                }

                App::getDB()->insert("reservation_rooms", [
                    "reservation_id" => $reservationId,
                    "room_id" => $this->form->room_id
                ]);

                App::getDB()->pdo->commit();

                Utils::addInfoMessage('Rezerwacja zakończona pomyślnie.');
                App::getRouter()->redirectTo('reservationHistory');
            } catch (\PDOException $e) {
                App::getDB()->pdo->rollBack();
                Utils::addErrorMessage('Wystąpił błąd podczas rezerwacji.');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            } catch (\Exception $e) {
                App::getDB()->pdo->rollBack();
                Utils::addErrorMessage($e->getMessage());
            }
        } else {
            $this->generateView();
        }
    }

    private function validate() {
        $this->form->date = ParamUtils::getFromRequest('date');
        $this->form->time = ParamUtils::getFromRequest('time');
        $this->form->number_of_people = ParamUtils::getFromRequest('number_of_people');
        $this->form->room_id = ParamUtils::getFromRequest('room_id');

        $now = new \DateTime();
        $selectedDate = new \DateTime($this->form->date);
        $selectedTime = new \DateTime($this->form->time);

        if (!isset($this->form->date) || !isset($this->form->time) || !isset($this->form->number_of_people) || !isset($this->form->room_id)) {
            return false;
        }

        if (empty($this->form->date) || empty($this->form->time) || empty($this->form->number_of_people) || empty($this->form->room_id)) {
            Utils::addErrorMessage('Wszystkie pola są wymagane.');
            return false;
        }

        if ($this->form->number_of_people < 1 || $this->form->number_of_people > 30) {
            Utils::addErrorMessage('Liczba osób musi być pomiędzy 1 a 30.');
            return false;
        }

        if ($selectedDate < $now->setTime(0, 0)) {
            Utils::addErrorMessage('Data rezerwacji nie może być wcześniejsza niż dzisiaj.');
            return false;
        }

        if ($selectedDate == $now->setTime(0, 0) && $selectedTime < $now) {
            Utils::addErrorMessage('Godzina rezerwacji nie może być wcześniejsza niż aktualna godzina.');
            return false;
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        return true;
    }

    private function generateView() {
        try {
            $rooms = App::getDB()->select("rooms", ["id", "name", "location"]);
            $now = new \DateTime();

            $start = new \DateTime('07:00');
            $end = new \DateTime('21:30');
            $interval = new \DateInterval('PT60M');
            $times = [];
            $selectedDate = ParamUtils::getFromRequest('date', false);
            $defaultTime = null;

            $existingReservations = App::getDB()->select("reservations", [
                "[><]reservation_rooms" => ["id" => "reservation_id"],
            ], [
                "reservations.date",
                "reservations.time",
                "reservation_rooms.room_id"
            ], [
                "reservations.date[>=]" => $now->format('Y-m-d')
            ]);

            $unavailableTimes = [];
            if ($existingReservations) {
                foreach ($existingReservations as $reservation) {
                    $unavailableTimes[$reservation['room_id']][$reservation['date']][] = $reservation['time'];
                }
            }

            if ($selectedDate) {
                foreach ($rooms as $room) {
                    $times[$room['id']] = [];
                    for ($time = clone $start; $time <= $end; $time->add($interval)) {
                        if ($selectedDate === $now->format('Y-m-d') && $time < $now) {
                            continue;
                        }
                        if (!isset($unavailableTimes[$room['id']][$selectedDate]) || !in_array($time->format('H:i:s'), $unavailableTimes[$room['id']][$selectedDate])) {
                            $times[$room['id']][] = $time->format('H:i');
                        }
                    }
                }
            }

            $isLoggedIn = SessionUtils::load("user", true) ? true : false;

            App::getSmarty()->assign('rooms', $rooms);
            App::getSmarty()->assign('times', $times);
            App::getSmarty()->assign('currentDate', $now->format('Y-m-d'));
            App::getSmarty()->assign('selectedDate', $selectedDate);
            App::getSmarty()->assign('defaultTime', $defaultTime);
            App::getSmarty()->assign('isLoggedIn', $isLoggedIn);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania dostępnych sal.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('ReservationView.tpl');
    }
}
