<?php

namespace App\Offer;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offer';

    public function batch()
    {
        return $this->belongsTo(\App\Product\Batch::class);
    }

}
