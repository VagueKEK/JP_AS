<?php

namespace app\transfer;

class User {
    public $id;
    public $name;
    public $surname;
    public $email;
    public $roles;

    public function __construct($id, $name, $surname, $email, $roles) {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->roles = $roles;

    }
}