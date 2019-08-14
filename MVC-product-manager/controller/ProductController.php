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
        $connection = new DBConnection("mysql:host=localhost;dbname=product_manager", "root", "");
        $this->productDB = new ProductDB($connection->connect());
    }

    public function index()
    {
        $products = $this->productDB->getAll();
        include "view/list.php";
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "view/add.php";
        } else {
            $name = $_POST["name"];
            $price = $_POST["price"];
            $quantity = $_POST["quantity"];
            $description = $_POST["description"];
            $product = new Product($name, $price, $quantity, $description);
            $this->productDB->create($product);
            header("Location:index.php");
        }
    }
//    public function show(){
//
//    }

    public function edit(){
        if($_SERVER["REQUEST_METHOD"] === "GET"){
            $id = $_GET["id"];
            $product = $this->productDB->get($id);
            include "view/edit.php";
        }else {
            $id = $_POST['id'];
            $product = new Product($_POST['name'], $_POST['price'],$_POST['quantity'], $_POST['description']);
            $this->productDB->update($id, $product);
            header('Location: index.php');
        }
    }

    public function show(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'view/detail.php';
        }
    }

    public function delete(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->productDB->delete($id);
            header('Location: index.php');
        }
    }
}