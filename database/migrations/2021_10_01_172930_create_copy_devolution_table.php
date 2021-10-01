<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyDevolutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copy_devolution', function (Blueprint $table) {            

            $table->unsignedBigInteger('devolution_id');
            $table->foreign('devolution_id')->references('id')->on('devolutions');

            $table->unsignedBigInteger('copy_id');
            $table->foreign('copy_id')->references('id')->on('copies');

            $table->text('comment', 1000)->nullable();
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
        Schema::dropIfExists('copy_devolution');
    }
}
