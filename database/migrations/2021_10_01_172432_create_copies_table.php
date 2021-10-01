<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copies', function (Blueprint $table) {
            $table->id();
            $table->integer('loan_days');
            $table->string('code', 45);

            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books');

            $table->unsignedBigInteger('bookshelf_id');
            $table->foreign('bookshelf_id')->references('id')->on('bookshelves');

            $table->unsignedBigInteger('copy_status_id');
            $table->foreign('copy_status_id')->references('id')->on('copy_statuses');
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
        Schema::dropIfExists('copies');
    }
}
