<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

final class CreateBatchTable extends Migration
{
    public function up()
    {
        Schema::create('batch', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
                $table->foreign('product_id')->references('id')->on('product');
            $table->integer('quantity');
            $table->date('expiry_date');
            $table->integer('retail_price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('batch');
    }
}
