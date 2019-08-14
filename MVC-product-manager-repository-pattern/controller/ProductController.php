<?php

namespace Controller;

use Model\Product;
use Repository\ProductRepository;


class ProductController
{
    public $productRepository;

    public function __construct()
    {

        $this->productRepository = new ProductRepository();
    }

    public function index()
    {
        $products = $this->productRepository->getAll();
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
            $this->productRepository->create($product);
            header("Location:index.php");
        }
    }

    public function edit()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET["id"];
            $product = $this->productRepository->get($id);
            include "view/edit.php";
        } else {
            $id = $_POST['id'];
            $product = new Product($_POST['name'], $_POST['price'], $_POST['quantity'], $_POST['description']);
            $this->productRepository->update($id, $product);
            header('Location: index.php');
        }
    }

    public function show()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productRepository->get($id);
            include 'view/detail.php';
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productRepository->get($id);
            include 'view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->productRepository->delete($id);
            header('Location: index.php');
        }
    }
}