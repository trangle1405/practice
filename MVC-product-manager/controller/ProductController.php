<?php
namespace Controller;
use Model\Product;
use Model\DBConnection;
use Model\ProductDB;

class ProductController
{
    public $productDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=productmanager", "root", "");
        $this->productDB = new ProductDB($connection->connect());
    }
}