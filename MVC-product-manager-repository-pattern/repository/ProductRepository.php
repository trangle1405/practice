<?php

namespace Repository;

use Model\Product;
use Model\DBConnection;
use Model\ProductDB;

class ProductRepository
{
    public $productDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=product_manager", "root", "");
        $this->productDB = new ProductDB($connection->connect());
    }`------------`

    public function getAll()
    {
        return $this->productDB->getAll();
    }

    public function create($product)
    {
        return $this->productDB->create($product);
    }

    public function get($id)
    {
        return $this->productDB->get($id);
    }

    public function update($id, $product)
    {
        return $this->productDB->update($id, $product);
    }

    public function delete($id)
    {
        return $this->productDB->delete($id);
    }
}