<?php
class Order{
    private $price;
    private $weight;
    private $description;
    private $status;
    public function __construct($price,$weight,$description){
        $this->price = $price;
        $this->weight = $weight;
        $this->description = $description;
    }
}