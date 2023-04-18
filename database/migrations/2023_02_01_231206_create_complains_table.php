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
        Schema::create('complains', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('complain')->nullable();
            $table->string('tenancy_status')->nullable();
            $table->string('university')->nullable();
            $table->string('property_address')->nullable();
            $table->string('landlord_name')->nullable();
            $table->string('tenency_type')->nullable();
            $table->string('created_by')->nullable();
            $table->string('proof')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('complains');
    }
};
