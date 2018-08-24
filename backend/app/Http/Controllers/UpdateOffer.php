<?php

namespace App\Http\Controllers;

use App\Offer\OfferRepository;
use Illuminate\Http\Request;

class UpdateOffer extends Controller
{
    private $offerRepo;

    public function __construct(OfferRepository $offerRepo)
    {
        $this->offerRepo = $offerRepo;
    }

    public function __invoke(Request $request)
    {
        return $this->offerRepo->updateOffer(
            $request->input('batch_id'),
            $request->input('discount_percentage')
        );
    }
}
