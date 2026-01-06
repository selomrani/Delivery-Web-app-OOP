<?php
namespace Web\Actions;
class OrderData {
    public function getData(): array {
        return [
            'price'       => $_POST['price'],
            'weight'      => $_POST['weight'], 
            'description' => $_POST['description'],
            'user_id'     => $_POST['user_id'],
        ];
    }
}