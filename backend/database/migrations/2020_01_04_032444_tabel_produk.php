<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TabelProduk', function (Blueprint $table) {
            $table->Increments('product_id');
            $table->string('kategori_product', 50);
            $table->string('product_name', 150);
            $table->decimal('product_price', 10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Shcema::dropIfExist('TabelProduk');
    }
}
