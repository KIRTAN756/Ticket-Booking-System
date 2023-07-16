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
        Schema::create('book_train_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('U_id')->unsigned();
            $table->bigInteger('Train_id')->unsigned();
            $table->string('Ticket_Number');
            $table->integer('Price');
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
        Schema::dropIfExists('book_train_infos');
    }
};
