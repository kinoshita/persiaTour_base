<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('city')->nullable(true)->comment('city');
            $table->string('hotel_name')->nullable(true)->comment('hotel name');
            $table->string('address')->nullable(true)->comment('address');
            $table->string('tel')->nullable(true)->comment('tel');
            $table->string('fax')->nullable(true)->comment('fax');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
