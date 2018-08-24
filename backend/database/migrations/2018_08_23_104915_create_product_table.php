<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

final class CreateProductTable extends Migration
{
    public function up()
    {
        Schema::create('product', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('store_id');
            $table->integer('barcode');
            $table->integer('category_id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product');
    }
}
