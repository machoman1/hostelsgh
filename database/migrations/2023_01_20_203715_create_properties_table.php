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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_name')->nullable();
            $table->string('property_type')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('number_of_rooms')->nullable();
            $table->string('number_of_rooms_available')->nullable();
            $table->string('land_lord')->nullable();
            $table->string('date_available')->nullable();
            $table->string('property_status')->nullable();
            $table->string('is_sheard')->nullable();
            $table->string('initial_deposit')->nullable();
            $table->string('amount_per_month')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
