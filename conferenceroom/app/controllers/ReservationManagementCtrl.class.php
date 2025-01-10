<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class ReservationManagementCtrl {
    public function action_employeeReservations() {
        $dateFilter = ParamUtils::getFromRequest('date');
        $reservationIdFilter = ParamUtils::getFromRequest('reservation_id');
        $surnameFilter = ParamUtils::getFromRequest('surname');

        $conditions = [];
        if ($dateFilter) {
            $conditions['reservations.date'] = $dateFilter;
        }
        if ($reservationIdFilter !== null && $reservationIdFilter >= 0) {
            $conditions['reservations.id'] = $reservationIdFilter;
        }
        if ($surnameFilter) {
            $conditions['users.surname[~]'] = $surnameFilter;
        }

        try {
            $reservations = App::getDB()->select("reservations", [
                "[><]reservation_rooms" => ["id" => "reservation_id"],
                "[><]rooms" => ["reservation_rooms.room_id" => "id"],
                "[><]users" => ["user_id" => "id"]
            ], [
                "reservations.id",
                "reservations.date",
                "reservations.creation_date",
                "reservations.time",
                "reservations.number_of_people",
                "reservations.status",
                "rooms.name(room_name)",
                "users.name(user_name)",
                "users.surname(user_surname)"
            ], $conditions + [
                "ORDER" => ["reservations.date" => "DESC", "reservations.time" => "DESC"]
            ]);

            App::getSmarty()->assign('reservations', $reservations);
            App::getSmarty()->assign('date_filter', $dateFilter);
            App::getSmarty()->assign('reservation_id_filter', $reservationIdFilter);
            App::getSmarty()->assign('surname_filter', $surnameFilter);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rezerwacji.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        App::getSmarty()->display('EmployeeReservationsView.tpl');
    }

    public function action_updateReservationStatus() {
        $reservationId = ParamUtils::getFromRequest('reservation_id');
        $status = ParamUtils::getFromRequest('status');

        try {
            if (trim(strtolower($status)) === 'anulowane') {
                // Usuwanie rezerwacji
                App::getDB()->delete("reservation_rooms", [
                    "reservation_id" => $reservationId
                ]);

                App::getDB()->delete("reservations", [
                    "id" => $reservationId
                ]);

                Utils::addInfoMessage('Rezerwacja została usunięta z systemu.');
            } else {
                // Aktualizacja statusu rezerwacji
                App::getDB()->update("reservations", [
                    "status" => $status
                ], [
                    "id" => $reservationId
                ]);

                Utils::addInfoMessage('Status rezerwacji został zaktualizowany.');
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas aktualizacji statusu rezerwacji.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        App::getRouter()->redirectTo('employeeReservations');
    }
}
