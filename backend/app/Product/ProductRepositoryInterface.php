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
    public function addProduct($product);

    public function getAll();

}