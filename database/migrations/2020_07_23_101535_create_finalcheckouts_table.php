<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinalcheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finalcheckouts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('checkout_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('qty');
            $table->timestamps();

            $table->foreign('checkout_id')->references('id')->on('checkouts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finalcheckouts');
    }
}
