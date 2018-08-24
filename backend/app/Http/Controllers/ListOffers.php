<?php

namespace App\Http\Controllers;

use App\Offer\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListOffers extends Controller
{
    public function __invoke()
    {
        $result = DB::select(DB::raw("SELECT retail_price, discount_percentage, end_date, batch_id, barcode, product.name FROM offer,batch,product WHERE batch_id = batch.id AND product_id = product.id"));

        return view('offer.list-offer',array('offers' => $result));
    }
}
