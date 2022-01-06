<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->foreignId('category_id')->nullable();
            // $table->foreignId('category_id')->constrained();
            $table->text('description');
            $table->string('picture', 255);
            $table->integer('price');
            $table->string('location', 255);
            // $table->foreignId('user_id')->constrained(); // the constrained will prevent user deletion if he has ads
            $table->foreignId('user_id');

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
        Schema::dropIfExists('ads');
    }
}
