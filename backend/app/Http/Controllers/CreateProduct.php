<?php

namespace App\Http\Controllers;

use App\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;

class CreateProduct
{

    private $productRepo;

    public function __construct(ProductRepositoryInterface $productRepoInterface) {
        $this->productRepo = $productRepoInterface;
    }

    public function __invoke(Request $request)
    {
        $this->productRepo->addProduct(
            $request->input('barcode'),
            $request->input('name'),
            $request->input('categoryId')
        );

        return redirect('/list-products');
    }

}