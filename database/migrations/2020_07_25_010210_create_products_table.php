<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("brand");
            $table->string("sku");
            $table->string("name");
            $table->string("slug");
            $table->text("description")->nullable();
            $table->integer("quantity");
            $table->float("weight")->nullable();
            $table->float("price")->nullable();
            $table->float("sale_price")->nullable();
            $table->tinyInteger("status");
            $table->tinyInteger("featured");
            $table->unsignedBigInteger("shop_id");
            $table->string("ratings")->nullable();
            $table->timestamps();
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
