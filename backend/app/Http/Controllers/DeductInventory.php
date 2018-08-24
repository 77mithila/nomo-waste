<?php

namespace App\Http\Controllers;

use App\Product\Batch;
use App\Product\Product;
use App\Product\ProductRepository;
use Illuminate\Http\Request;

class DeductInventory extends Controller
{
    private $productsRepo;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productsRepo = $productRepository;
    }

    public function __invoke(Request $request)
    {
        $barcode = $request->input('barcode');
        $quantity = $request->input('quantity');
        $product = $this->productsRepo->getByBarcode($barcode);
        if ($product != null)
        {
            $product->deductInventory($product->id,$quantity);
            return redirect('/list-products');
        }
        else
            return 'Barcode does not exist';
    }
}
