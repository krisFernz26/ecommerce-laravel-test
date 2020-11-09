<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users');

            $table->bigInteger('postId')->unsigned();
            $table->foreign('postId')->references('id')->on('posts');

            $table->bigInteger('paymentId')->unsigned();
            $table->foreign('paymentId')->references('id')->on('payments');
            $table->bigInteger('quantity');
            $table->timestamps();
            $table->timestamp('dateCompleted')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
