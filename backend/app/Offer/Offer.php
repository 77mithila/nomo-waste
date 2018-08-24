<?php

namespace App\Offer;

use Illuminate\Database\Eloquent\Model;
use App\Product\Batch;

class Offer extends Model
{
    protected $table = 'offer';

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }


}
