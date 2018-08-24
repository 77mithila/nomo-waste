<?php
/**
 * Created by IntelliJ IDEA.
 * User: vivian
 * Date: 24/08/2018
 * Time: 14.20
 */
namespace App\Offer;

interface OfferRepositoryInterface{

    public function addOffer($batchId, $discountPercentage);
}
