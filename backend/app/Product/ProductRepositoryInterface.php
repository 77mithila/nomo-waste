<?php
/**
 * Created by PhpStorm.
 * User: mithila
 * Date: 23/08/18
 * Time: 17:14
 */

namespace App\Product;


interface ProductRepositoryInterface
{
    public function addProduct(int $barcode, string $name, int $categoryId);

    public function getAll();

    public function getById(int $id);

    public function getByBarcode(int $barcode);

}
