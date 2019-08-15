<?php


namespace Repository;


interface Repository
{
    public function getAll();
    public function create($product);
    public function get($id);
    public function update($id, $product);
    public function delete($id);
}