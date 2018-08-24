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

    public function offer()
    {
        return  $this->hasOne(\App\Offer\Offer::class);
    }

    public function barcode() : int
    {
        return $this->product->barcode;
    }

    public function daysBeforeWarningAboutExpiration() : int
    {
        return $this->product->category()->daysBeforeWarningAboutExpiration();
    }

    public function isExpiringAt(\DateTimeImmutable $date) : bool
    {
        $expirationDate = $this->expirationDate();

        $daysBeforeWarning = new \DateInterval(sprintf('P%uD', $this->daysBeforeWarningAboutExpiration()));

        return $expirationDate->sub($daysBeforeWarning) <= $date;
    }

}
