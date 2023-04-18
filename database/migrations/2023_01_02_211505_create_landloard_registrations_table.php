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
        Schema::create('landloard_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('surename');
            $table->string('email');
            $table->string('city');
            $table->string('title')->nullable();
            $table->string('house_name');
            $table->string('house_number')->nullable();
            $table->string('street')->nullable();
            $table->string('company')->nullable();
            $table->string('district');
            $table->string('contact_name');
            $table->string('town')->nullable();
            $table->string('contact_number');
            $table->string('website')->nullable();
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
        Schema::dropIfExists('landloard_registrations');
    }
};
