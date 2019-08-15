<?php
namespace Repository;

use Model\Product;

class ProductRepositoryImpl extends QueryRepository implements ProductRepository
{

    public function getModel()
    {
        $this->model = Product::class;
    }
}

