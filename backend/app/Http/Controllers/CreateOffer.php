<?php

namespace App\Http\Controllers;

use App\Offer\Offer;
use App\Offer\OfferRepository;
use Illuminate\Http\Request;

class CreateOffer extends Controller
{
    private $offerRepo;

    public function __construct(OfferRepository $offerRepo)
    {
        $this->offerRepo = $offerRepo;
    }

    public function __invoke(Request $request)
    {
        $this->offerRepo->addOffer(
            $request->input('batch_id'),
            $request->input('discount_percentage')
        );

        return redirect('/expiring-inventory');
    }
}
