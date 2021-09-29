<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenaltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penalties', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->decimal('amount', 6, 2);
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('penalty_type_id');
            $table->foreign('penalty_type_id')->references('id')->on('penalty_types');

            $table->unsignedBigInteger('final_user_id');
            $table->foreign('final_user_id')->references('id')->on('final_users');

            $table->unsignedBigInteger('penalty_status_id');
            $table->foreign('penalty_status_id')->references('id')->on('penalty_statuses');

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
        Schema::dropIfExists('penalties');
    }
}
