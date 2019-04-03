<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilldetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->increments('id_bill_detail');
            $table->integer('id_bill')->unsigned();
            $table->integer('id_product')->unsigned();
            $table->integer('quantity');
            $table->double('total');
            $table->foreign('id_bill')->references('id_bill')->on('bills');
            $table->foreign('id_product')->references('id_product')->on('products');
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
        Schema::dropIfExists('bill_details');
    }
}
