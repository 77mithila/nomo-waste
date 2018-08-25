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

        return view('expiring-inventory', compact('inventory'));
    }

    private function getExpiringBatches(DateTime $today)
    {
        $inventory = Batch::with('product')->with('offer')
            ->where('store_id',session('user')['store_id'])
            ->where('expiration_date', '>=', $today->format('Y-m-d'))
            ->where('quantity','>',0)
            ->orderBy('expiration_date', 'asc')
            ->get();

        return $inventory->filter(function(Batch $batch) use ($today) {
            return $batch->isExpiringAt($today);
        });
    }
}