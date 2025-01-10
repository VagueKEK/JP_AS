<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\UserEditForm;

class UserEditCtrl {
    private $form;
    private $id;

    public function __construct() {
        $this->form = new UserEditForm();
    }

    public function validate() {
        $this->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_userEdit() {
        if ($this->validate()) {
            try {
                $record = App::getDB()->get("users", "*", [
                    "id" => $this->id
                ]);

                if ($record) {
                    $this->form->id = $record['id'];
                    $this->form->name = $record['name'];
                    $this->form->surname = $record['surname'];
                    $this->form->email = $record['email'];
                    $this->form->active = $record['active'];
                    $this->form->role = $record['role'];
                } else {
                    Utils::addErrorMessage('Nie znaleziono rekordu.');
                }
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordu.');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
        }

        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('UserEditView.tpl');
    }

    public function action_userSave() {
        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->surname = ParamUtils::getFromRequest('surname');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->active = ParamUtils::getFromRequest('active');
        $this->form->role = ParamUtils::getFromRequest('role');

        if (!isset($this->form->name) || !isset($this->form->surname) || !isset($this->form->email) || !isset($this->form->active) || !isset($this->form->role)) {
            Utils::addErrorMessage('Wszystkie pola są wymagane.');
            $this->action_userEdit();
            return;
        }

        try {
            // Pobierz bieżącą datę
            $currentDate = date('Y-m-d H:i:s');

            // Aktualizacja danych użytkownika w tabeli `users`
            App::getDB()->update("users", [
                "name" => $this->form->name,
                "surname" => $this->form->surname,
                "email" => $this->form->email,
                "active" => $this->form->active,
                "modification_date" => $currentDate // Dodanie daty modyfikacji
            ], [
                "id" => $this->form->id
            ]);

            // Aktualizacja roli użytkownika w tabeli `user_roles`
            App::getDB()->update("user_roles", [
                "role_id" => $this->form->role
            ], [
                "user_id" => $this->form->id
            ]);

            Utils::addInfoMessage('Pomyślnie zapisano zmiany.');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas zapisywania rekordu.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        App::getRouter()->redirectTo('employeeUsers');
    }
}
