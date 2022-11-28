<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->foreign('id-game')->references('id')->on('games')->onDelete('cascade');
            $table->foreign('id-challenger')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id-challenged')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('seen');
            $table->integer('winner');
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
        Schema::dropIfExists('challenges');
    }
};
