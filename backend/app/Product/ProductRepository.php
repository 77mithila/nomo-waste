<?php
/**
 * Created by PhpStorm.
 * User: mithila
 * Date: 23/08/18
 * Time: 17:16
 */

namespace App\Product;


class ProductRepository implements ProductRepositoryInterface
{

    public function addProduct($productData)
    {
        $product = new Product();
        $product->barcode = $productData->query('barcode');
        $product->name = $productData->query('name');
        $product->category_id = $productData->query('categoryId');

        $product->save();

        return $product;
    }

    public function getAll()
    {
        return Product::all();
    }
}