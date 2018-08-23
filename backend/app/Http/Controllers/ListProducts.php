<?php
/**
 * Created by PhpStorm.
 * User: mithila
 * Date: 23/08/18
 * Time: 16:26
 */

namespace App\Http\Controllers;

use App\Product\ProductRepositoryInterface;
use \Illuminate\Http\Request;

class ListProducts
{

    private $productRepo;

    public function __construct(ProductRepositoryInterface $productRepoInterface) {
        $this->productRepo = $productRepoInterface;
    }

    public function __invoke()
    {
        return $this->productRepo->getAll();
    }

}