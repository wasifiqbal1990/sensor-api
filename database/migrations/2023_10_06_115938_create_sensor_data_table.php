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
        Schema::create('sensor_data', function (Blueprint $table) {
            $table->id();
            $table->integer('sensor_id');
            $table->float('ax')->nullable();
            $table->float('ay')->nullable();
            $table->float('az')->nullable();
            $table->float('asqrt')->nullable();
            $table->float('gx')->nullable();
            $table->float('gy')->nullable();
            $table->float('gz')->nullable();
            $table->float('mdirection')->nullable();
            $table->float('mx')->nullable();
            $table->float('my')->nullable();
            $table->float('mz')->nullable();
            $table->float('pressure')->nullable();
            $table->float('temperature')->nullable();
            $table->float('altitude')->nullable();
            $table->float('strain1')->nullable();
            $table->float('strain2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensor_data');
    }
};
