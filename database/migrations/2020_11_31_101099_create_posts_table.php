<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('productId')->unsigned();
            $table->foreign('productId')->references('id')->on('products');

            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users');

            $table->string('title');
            $table->string('description');
            $table->timestamps();
            $table->boolean('sold');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
