<?php
namespace Web\Actions;

class Driverdata
{
    public function getData(): array
    {
        return [
            'firstname'     => $_POST['firstname'],
            'lastname'      => $_POST['lastname'],
            'phone'         => $_POST['phone'],
            'email'         => $_POST['email'],
            'role'          => 'driver',
            'password'      => password_hash($_POST['password'], PASSWORD_DEFAULT),
        ];
    }
    public function getvehiculedata(){
        return [
        'type'  => $_POST['vehicle-type'],
        'model' => $_POST['vehicle-model']
        ];
    }
}
