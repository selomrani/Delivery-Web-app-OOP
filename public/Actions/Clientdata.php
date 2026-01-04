<?php
namespace Web\Actions;
class Clientdata {
    public function getData(): array {
        return [
            'firstname' => $_POST['firstname'] ?? null,
            'lastname'  => $_POST['lastname'] ?? null,
            'phone'     => $_POST['phone'] ?? null,
            'email'     => $_POST['email'] ?? null,
            'role'      => 'client',
            'password'  => password_hash($_POST['password'],PASSWORD_DEFAULT)
        ];
    }
}

