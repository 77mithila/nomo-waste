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
        $offer->store_id = session('user')['store_id'];
        $offer->batch_id = $batchId;
        $batch = Batch::where('id',$batchId)->first();
        $offer->discount_percentage = $discountPercentage;
        $offer->end_date = $batch->expiration_date;

        $offer->save();
        return $offer;
    }

    public function updateOffer($batchId, $discountPercentage)
    {
        $offer = Offer::where('batch_id',$batchId)->first();
        if ($offer != null){
            $offer->discount_percentage = $discountPercentage;
            $offer->save();
            return redirect('/expiring-inventory');
        }
        else
            return 'Wrong batch ID';
    }
}
