<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class UserManagementCtrl
{

    private $records_per_page = 10;

    public function action_employeeUsers()
    {
        $page = ParamUtils::getFromRequest('page', false, 'Błędne wywołanie aplikacji');
        $surnameFilter = ParamUtils::getFromRequest('surname');

        if (!$page) {
            $page = 1;
        }

        $offset = ($page - 1) * $this->records_per_page;

        $conditions = [];
        if ($surnameFilter) {
            $conditions["users.surname[~]"] = $surnameFilter;
        }

        try {
            $total_records = App::getDB()->count("users", $conditions);
            $total_pages = ceil($total_records / $this->records_per_page);

            $conditions["LIMIT"] = [$offset, $this->records_per_page];
            $conditions["ORDER"] = ["users.surname" => "ASC"];

            $users = App::getDB()->select("users", [
                "[><]user_roles" => ["id" => "user_id"],
                "[><]roles" => ["user_roles.role_id" => "id"]
            ], [
                "users.id",
                "users.name",
                "users.surname",
                "users.email",
                "roles.role_name",
                "users.active"
            ], $conditions);

            App::getSmarty()->assign('users', $users);
            App::getSmarty()->assign('total_pages', $total_pages);
            App::getSmarty()->assign('current_page', $page);
            App::getSmarty()->assign('surname_filter', $surnameFilter);

            if ($this->isAjaxRequest()) {
                App::getSmarty()->display('EmployeeUsersTable.tpl');
            } else {
                App::getSmarty()->display('EmployeeUsersView.tpl');
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania użytkowników.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
    }

    public function action_addUser()
    {
        $name = ParamUtils::getFromRequest('name');
        $surname = ParamUtils::getFromRequest('surname');
        $email = ParamUtils::getFromRequest('email');
        $password = ParamUtils::getFromRequest('password');
        $role = ParamUtils::getFromRequest('role');

        try {
            App::getDB()->insert("users", [
                "name" => $name,
                "surname" => $surname,
                "email" => $email,
                "password" => password_hash($password, PASSWORD_DEFAULT)
            ]);

            $userId = App::getDB()->id();

            App::getDB()->insert("user_roles", [
                "user_id" => $userId,
                "role_id" => $role
            ]);

            Utils::addInfoMessage('Użytkownik został dodany.');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas dodawania użytkownika.');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

if ($this->isAjaxRequest()) {
    http_response_code(200);
    exit(); // zakończ bez przekierowania
} else {
    App::getRouter()->redirectTo('employeeUsers');
}

    }

    private function isAjaxRequest()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
    }
}
