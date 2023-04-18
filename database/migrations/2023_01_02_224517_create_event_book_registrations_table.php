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
        Schema::create('event_book_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('surename');
            $table->string('email');
            $table->string('institution_type');
            $table->string('title')->nullable();
            $table->string('address');
            $table->string('organization')->nullable();
            $table->string('street')->nullable();
            $table->string('company_name')->nullable();
            $table->string('district');
            $table->string('town')->nullable();
            $table->string('contact_name');
            $table->string('phone');
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
        Schema::dropIfExists('event_book_registrations');
    }
};
