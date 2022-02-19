<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanionoffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companionoffers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offer_id');
            $table->unsignedBigInteger('companion_id');
            $table->unsignedBigInteger('companion_id_2')->nullable();
            $table->unsignedBigInteger('companion_id_3')->nullable();
            $table->unsignedBigInteger('companion_id_4')->nullable();
            $table->string('tel');
            $table->string('num_of_companions');
            $table->string('companion_level');
            $table->string('accept')->nullable();
            $table->timestamps();

            $table->foreign('offer_id')->references('id')->on('offers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companionoffers');
    }
}
