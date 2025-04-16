<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class ReservationHistoryCtrl {
    private $records_per_page = 20;

    public function action_reservationHistory() {
        $user = SessionUtils::load("user", true);
        if (!$user) {
            Utils::addErrorMessage('Musisz być zalogowany, aby zobaczyć historię rezerwacji.');
            App::getRouter()->redirectTo('loginShow');
            return;
        }
        $userId = $user->id;

        $page = ParamUtils::getFromRequest('page', false, 'Błędne wywołanie aplikacji');
        if (!$page) {
            $page = 1;
        }

        $offset = ($page - 1) * $this->records_per_page;

        try {
            $total_records = App::getDB()->count("reservations", [
                "user_id" => $userId
            ]);
            $total_pages = ceil($total_records / $this->records_per_page);

            $reservations = App::getDB()->select("reservations", [
                "[><]reservation_rooms" => ["id" => "reservation_id"],
                "[><]rooms" => ["reservation_rooms.room_id" => "id"]
            ], [
                "reservations.id",
                "reservations.date",
                "reservations.creation_date",
                "reservations.time",
                "reservations.number_of_people",
                "reservations.status",
                "rooms.name(room_name)"
            ], [
                "reservations.user_id" => $userId,
                "ORDER" => ["reservations.date" => "DESC", "reservations.time" => "DESC"],
                "LIMIT" => [$offset, $this->records_per_page]
            ]);

            App::getSmarty()->assign('reservations', $reservations);
            App::getSmarty()->assign('total_pages', $total_pages);
            App::getSmarty()->assign('current_page', $page);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rezerwacji.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        App::getSmarty()->display('ReservationHistoryView.tpl');
    }
}
