<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('send')->comment('送信者');
            $table->unsignedBigInteger('recieve')->comment('受信者');
            $table->text('message')->comment('メッセージ');
            $table->timestamps();

            $table->foreign('send')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('recieve')->references('id')->on('companions')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
