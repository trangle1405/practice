<?php


namespace Model;


class ProductDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row["name"], $row["price"], $row["quantity"], $row["description"]);
            $product->id = $row["id"];

            array_push($products, $product);
        }
        return $products;
    }

    public function create($product)
    {
        $sql = "INSERT INTO products (name , price, quantity, description) VALUES (?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->price);
        $statement->bindParam(3, $product->quantity);
        $statement->bindParam(4, $product->description);
        return $statement->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM products WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $result = $statement->fetch();
        $product = new Product($result["name"], $result["price"], $result["quantity"], $result["description"]);
        $product->id = $result['id'];
        return $product;
    }
    public function update($id, $product){
        $sql = "UPDATE products SET name = ?, price = ?, quantity = ? , description = ?WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->price);
        $statement->bindParam(3, $product->quantity);
        $statement->bindParam(4, $product->description);
        $statement->bindParam(5, $id);
        return $statement->execute();
    }

    public function delete($id){
        $sql = "DELETE FROM products WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }
}