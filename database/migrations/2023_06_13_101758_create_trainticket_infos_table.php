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
        Schema::create('trainticket_infos', function (Blueprint $table) {
            $table->id();
            $table->string('Train_Name');
            $table->string('Business_Class');
            $table->integer('BC_Container');
            $table->string('BC_Range');
            $table->string('Tier3');
            $table->integer('T3_Container');
            $table->string('T3_Range');
            $table->string('Tier2');
            $table->integer('T2_Container');
            $table->string('T2_Range');
            $table->string('From');
            $table->string('Destination');
            $table->dateTime('Time');
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
        Schema::dropIfExists('trainticket_infos');
    }
};
