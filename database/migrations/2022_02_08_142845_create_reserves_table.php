<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('offer_id')->nullable();
            $table->unsignedBigInteger('user_id_men')->nullable();
            $table->unsignedBigInteger('user_id_women')->nullable();
            $table->unsignedBigInteger('area_id');
            $table->string('golf_course')->nullable();
            $table->date('date')->nullable();
            $table->time('start_at')->nullable();
            $table->string('num_of_players_men')->nullable();
            $table->string('num_of_players_women')->nullable();
            $table->unsignedBigInteger('mens_level_id');
            $table->unsignedBigInteger('required_level_id');
            $table->string('cost')->nullable();
            $table->string('mens_age')->nullable();
            $table->string('womens_age')->nullable();
            $table->timestamps();

            $table->foreign('user_id_men')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id_women')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('mens_level_id')->references('id')->on('levels')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('required_level_id')->references('id')->on('levels')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserves');
    }
}
