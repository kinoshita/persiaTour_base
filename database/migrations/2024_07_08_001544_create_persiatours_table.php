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
        Schema::create('persiatours', function (Blueprint $table) {
            $table->id();
            $table->date('tour_date')->nullable(false)->comment('tour start date');
            $table->string('reference_id')->nullable(false)->comment('reference_id');
            $table->string('agent')->nullable(false)->comment('agent');
            $table->string('tour_name')->nullable(false)->comment('tour name');
            $table->string('series')->nullable(false)->comment('series');
            $table->string('destination')->nullable(false)->comment('destination');
            $table->string('situation')->nullable(false)->comment('situation');
            $table->string('pax')->nullable(false)->comment('pax');
            $table->string('service')->nullable(false)->comment('service');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persiatours');
    }
};
