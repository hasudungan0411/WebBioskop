<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionSeatTable extends Migration
{
    public function up()
    {
        Schema::create('transaction_seat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('seat_id');
            $table->timestamps();

            // Foreign keys
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction_seat');
    }
}
