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
            $table->string('product_name');
            $table->double('price')->unsigned();
            $table->longText('description');
            $table->double('sold_quantity')->nullable();
            $table->integer('new');
            $table->integer('id_product_type')->unsigned();
            $table->foreign('id_product_type')->references('id_product_type')->on('product_types');
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
