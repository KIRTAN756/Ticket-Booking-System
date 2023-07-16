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
        Schema::create('ticket_infos', function (Blueprint $table) {
            $table->id();
            $table->string('Bus_Name');
            $table->string('From');
            $table->string('Destination');
            $table->dateTime('Time');
            $table->string('A1');
            $table->string('A2');
            $table->string('A3');
            $table->string('A4');
            $table->string('A5');
            $table->string('A6');
            $table->string('A7');
            $table->string('A8');
            $table->string('A9');
            $table->string('A10');
            $table->string('B1');
            $table->string('B2');
            $table->string('B3');
            $table->string('B4');
            $table->string('B5');
            $table->string('B6');
            $table->string('B7');
            $table->string('B8');
            $table->string('B9');
            $table->string('B10');
            $table->string('C1');
            $table->string('C2');
            $table->string('C3');
            $table->string('C4');
            $table->string('C5');
            $table->string('C6');
            $table->string('C7');
            $table->string('C8');
            $table->string('C9');
            $table->string('C10');
            $table->string('D1');
            $table->string('D2');
            $table->string('D3');
            $table->string('D4');
            $table->string('D5');
            $table->string('D6');
            $table->string('D7');
            $table->string('D8');
            $table->string('D9');
            $table->string('D10');
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
        Schema::dropIfExists('ticket_infos');
    }
};
