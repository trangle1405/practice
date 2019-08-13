<?php

namespace Model;

class Product
{
    public $id;
    public $name;
    public $price;
    public $quantity;
    public $description;

    public function __construct($name, $price, $quantity, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
    }
}