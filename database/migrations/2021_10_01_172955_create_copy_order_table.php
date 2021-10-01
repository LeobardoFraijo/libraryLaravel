<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copy_order', function (Blueprint $table) {
            
            $table->unsignedBigInteger('book_order_id');
            $table->foreign('book_order_id')->references('id')->on('book_orders');

            $table->unsignedBigInteger('copy_id');
            $table->foreign('copy_id')->references('id')->on('copies');

            $table->datetime('delivery_day');

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
        Schema::dropIfExists('copy_order');
    }
}
