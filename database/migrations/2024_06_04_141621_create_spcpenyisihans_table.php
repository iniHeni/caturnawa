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
        Schema::create('spcpenyisihans', function (Blueprint $table) {
            $table->id();
            $table->string('university');
            $table->string('namapeserta');
            $table->integer('scorepenyajiankarya');
            $table->integer('scoresubstansikarya');
            $table->integer('scorekualitaskarya');
            $table->integer('total');
            $table->string('juri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spcpenyisihans');
    }
};
