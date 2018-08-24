<?php

namespace App\Product;

final class ProductRepository implements ProductRepositoryInterface
{

    public function addProduct(int $barcode, string $name, int $categoryId)
    {
        $product = new Product();
        $product->store_id = session('user')['store_id'];
        $product->barcode = $barcode;
        $product->name = $name;
        $product->category_id = $categoryId;

        $product->save();

        return $product;
    }

    public function getAll()
    {
        return Product::where('store_id',session('user')['store_id'])->get();
    }

    public function getById(int $id)
    {
        return Product::findOrFail($id);
    }

    public function getByBarcode(int $barcode)
    {
        $product = Product::where('barcode',$barcode)->first();
        if ($product != null)
            return $product;
        else
            return null;
    }
}
