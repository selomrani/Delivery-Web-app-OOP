<?php

namespace Web\Actions;

class Data
{
    public function GetClientData(): array
    {
        return [
            'firstname' => $_POST['firstname'] ?? null,
            'lastname'  => $_POST['lastname'] ?? null,
            'phone'     => $_POST['phone'] ?? null,
            'email'     => $_POST['email'] ?? null,
            'role'      => 'client',
            'password'  => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
    }
    public function GetDriverData(): array
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
    public function GetVehiculedata(): array
    {
        return [
            'type'  => $_POST['vehicle-type'],
            'model' => $_POST['vehicle-model']
        ];
    }
    public function GetOrderData(): array {
        return [
            'price'       => $_POST['price'],
            'weight'      => $_POST['weight'],
            'description' => $_POST['description'],
            'user_id'     => $_POST['user_id'],
        ];
    }
    public function GetAddressData(){
        return [
            'country' => $_POST['country'],
            'city' => $_POST['city'],
            'zipcode' => $_POST['zipcode'],
            'house_number' => $_POST['house_number'],
            'street_name' => $_POST['street_name'],
        ];
    }
}
