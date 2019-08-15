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
    }

    public function getAll()
    {
        try {
            return $this->productDB->getAll();
        } catch (Exception $e) {
            self::disconnect();
            throw $e;
        }

    }

    public function create($product)
    {
        try {
            return $this->productDB->create($product);
        } catch (Exception $e) {
            self::disconnect();
            throw $e;
        }

    }

    public function get($id)
    {
        try {
            return $this->productDB->get($id);
        } catch (Exception $e) {
            self::disconnect();
            throw $e;
        }

    }

    public function update($id, $product)
    {
        try {
            return $this->productDB->update($id, $product);
        } catch (Exception $e) {
            self::disconnect();
            throw $e;
        }

    }

    public function delete($id)
    {
        try {
            return $this->productDB->delete($id);;
        } catch (Exception $e) {
            self::disconnect();
            throw $e;
        }

    }
}