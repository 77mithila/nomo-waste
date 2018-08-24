<?php

namespace App\Http\Controllers;

use App\Product\ProductRepositoryInterface as ProductRepository;
use Illuminate\Http\Request;

final class AddBatch
{
    private $products;

    public function __construct(ProductRepository $productRepository)
    {
        $this->products = $productRepository;
    }

    public function __invoke(Request $request)
    {
        $productId = $request->input('product_id');
        $product = $this->products->getById($productId);

        $product->addBatch(
            $request->input('quantity'),
            $request->input('expiration_date'),
            $request->input('retail_price')
        );

        return redirect('/list-products');
    }
}
