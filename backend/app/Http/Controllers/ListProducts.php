<?php

namespace App\Http\Controllers;

use App\Product\ProductRepositoryInterface;
use \Illuminate\Http\Request;

final class ListProducts
{
    private $productRepo;

    public function __construct(ProductRepositoryInterface $productRepoInterface)
    {
        $this->productRepo = $productRepoInterface;
    }

    public function __invoke()
    {
        $products = $this->productRepo->getAll();

        return view('product.list', array(
            'products' => $products,
        ));
    }
}
