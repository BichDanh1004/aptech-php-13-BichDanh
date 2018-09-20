<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id_product');
            $table->string('product_name')->unique();
            $table->integer('quantity');
            $table->double('price');
            $table->string('description');
            $table->string('image');
            $table->integer('id_product_type')->unsigned();
            $table->integer('id_product_gender')->unsigned();
            $table->foreign('id_product_type')->references('id_product_type')->on('product_types');
            $table->foreign('id_product_gender')->references('id_gender')->on('product_type_genders');
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
        Schema::dropIfExists('products');
    }
}
