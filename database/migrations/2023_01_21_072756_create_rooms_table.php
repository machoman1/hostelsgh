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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('property_name')->nullable();
            $table->string('room_name')->nullable();
            $table->string('city')->nullable();
            $table->string('date_available')->nullable();
            $table->string('amount_per_month')->nullable();
            $table->string('initial_deposit')->nullable();
            $table->string('landlord')->nullable();
            $table->string('room_status')->nullable();
            $table->string('room_img_1')->nullable();
            $table->string('room_img_2')->nullable();
            $table->string('room_img_3')->nullable();
            $table->string('room_img_4')->nullable();
            $table->string('room_img_5')->nullable();
            $table->string('room_prop_1')->nullable();
            $table->string('room_prop_2')->nullable();
            $table->string('room_prop_3')->nullable();
            $table->string('room_prop_4')->nullable();
            $table->string('room_prop_5')->nullable();
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
        Schema::dropIfExists('rooms');
    }
};
