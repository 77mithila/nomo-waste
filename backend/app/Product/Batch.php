<?php

namespace App\Product;

use DateTimeImmutable as DateTime;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = 'batch';

    public function quantity() : int
    {
        return $this->quantity;
    }

    public function expirationDate() : DateTime
    {
        return new DateTime($this->expiration_date);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function barcode() : int
    {
        return $this->product->barcode;
    }

    public function daysBeforeWarningAboutExpiration() : int
    {
        return $this->product->category()->daysBeforeWarningAboutExpiration();
    }
}
