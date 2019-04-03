<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id_bill');
            $table->double('total');
            $table->integer('id_customer')->unsigned();
            $table->integer('id_employee')->unsigned()->nullable();
            $table->string('address');
            $table->foreign('id_customer')->references('id_user')->on('users');
            $table->foreign('id_employee')->references('id_user')->on('users');
            $table->date('date_order')->nullable();
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
        Schema::dropIfExists('bills');
    }
}
