<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShiftAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shift_account', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Billoflading');
            $table->string('contractorpolicy');
            $table->bigInteger('contractor_id')->unsigned();
            $table->foreign('contractor_id')->references('id')->on('contractors');

            $table->bigInteger('placeup_id')->unsigned();
            $table->foreign('placeup_id')->references('id')->on('places');

            $table->bigInteger('placedown_id')->unsigned();
            $table->foreign('placedown_id')->references('id')->on('places');

            $table->bigInteger('navigation_id')->unsigned();
            $table->foreign('navigation_id')->references('id')->on('navigations');

            $table->bigInteger('payload_id')->unsigned();
            $table->foreign('payload_id')->references('id')->on('payloads');

            $table->integer('weight');
            $table->integer('nolon');
            $table->integer('value');
            $table->string('covenant');
            $table->string('Office');
            $table->string('net');
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
        Schema::dropIfExists('shift_account');
    }
}
