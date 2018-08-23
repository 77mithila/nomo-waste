<?php

namespace App\Product;

final class ProductRepository implements ProductRepositoryInterface
{

    public function addProduct(int $barcode, string $name, int $categoryId)
    {
        $product = new Product();
        $product->barcode = $barcode;
        $product->name = $name;
        $product->category_id = $categoryId;

        $product->save();

        return $product;
    }

    public function getAll()
    {
        return Product::all();
    }
}