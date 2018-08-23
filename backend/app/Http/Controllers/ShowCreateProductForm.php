<?php
/**
 * Created by PhpStorm.
 * User: mithila
 * Date: 23/08/18
 * Time: 16:29
 */

namespace App\Http\Controllers;


class ShowCreateProductForm
{

    public function __invoke()
    {
        return view('product.product-create-form');
    }
}