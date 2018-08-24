<?php

namespace App\Http\Controllers;

use App\Offer\Offer;
use Illuminate\Http\Request;

class ListOffers extends Controller
{
    public function __invoke()
    {
        $offers = Offer::with('batch')->orderBy('end_date','asc')->get();

        return $offers;
    }
}
