<?php
namespace Service;
use Model\Product;
use Model\DBConnection;
use Repository\ProductRepositoryImpl;
class ProductServiceImpl implements ProductService
{
    public $productRepositoryImpl;
    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=product_manager", "root", "");
        $this->productRepositoryImpl = new ProductRepositoryImpl($connection->connect());
    }
    public function getAll()
    {
        try {
            return $this->productRepositoryImpl->getAll();
        } catch (Exception $e) {
            self::disconnect();
            throw $e;
        }
    }
    public function create($product)
    {
        try {
            return $this->productRepositoryImpl->create($product);
        } catch (Exception $e) {
            self::disconnect();
            throw $e;
        }
    }
    public function get($id)
    {
        try {
            return $this->productRepositoryImpl->get($id);
        } catch (Exception $e) {
            self::disconnect();
            throw $e;
        }
    }
    public function update($id, $product)
    {
        try {
            return $this->productRepositoryImpl->update($id, $product);
        } catch (Exception $e) {
            self::disconnect();
            throw $e;
        }
    }
    public function delete($id)
    {
        try {
            return $this->productRepositoryImpl->delete($id);;
        } catch (Exception $e) {
            self::disconnect();
            throw $e;
        }
    }
}