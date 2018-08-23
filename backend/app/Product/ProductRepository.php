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
        $product->barcode = $productData->input('barcode');
        $product->name = $productData->input('name');
        $product->category_id = $productData->input('categoryId');

        $product->save();

        return $product;
    }

    public function getAll()
    {
        return Product::all();
    }
}