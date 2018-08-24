<?php
/**
 * Created by IntelliJ IDEA.
 * User: vivian
 * Date: 24/08/2018
 * Time: 14.21
 */
namespace App\Offer;

use App\Product\Batch;

final class OfferRepository implements OfferRepositoryInterface{


    public function addOffer($batchId, $discountPercentage)
    {
        $offer = new Offer();
        $offer->batch_id = $batchId;
        $batch = Batch::where('id',$batchId)->first();
        $offer->discount_percentage = $discountPercentage;
        $offer->end_date = $batch->expiration_date;

        $offer->save();
        return $offer;
    }
}
