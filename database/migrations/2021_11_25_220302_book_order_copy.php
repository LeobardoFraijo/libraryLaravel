<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookOrderCopy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_order_copy', function (Blueprint $table) {            

            $table->unsignedBigInteger('book_order_id');
            $table->foreign('book_order_id')->references('id')->on('book_orders');

            $table->unsignedBigInteger('copy_id');
            $table->foreign('copy_id')->references('id')->on('copies');

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
        Schema::dropIfExists('book_order_copy');
    }
}
