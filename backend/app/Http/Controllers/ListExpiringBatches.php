<?php

namespace App\Http\Controllers;

use App\Product\Batch;
use DateTimeImmutable as DateTime;
use Illuminate\Http\Request;

class ListExpiringBatches
{
    public function __invoke(Request $request)
    {
        $today = new DateTime();

        $inventory = $this->getExpiringBatches($today);

        return view('expiring-inventory', array(
            'inventory' => $inventory,
        ));
    }

    private function getExpiringBatches(DateTime $today)
    {
        $inventory = Batch::with('product')
            ->where('expiration_date', '>=', $today->format('Y-m-d'))
            ->orderBy('expiration_date', 'desc')
            ->get();

        return $inventory->filter(function(Batch $batch) use ($today) {
            return $batch->isExpiringAt($today);
        });
    }
}