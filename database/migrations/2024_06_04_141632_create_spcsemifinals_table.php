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
        Schema::create('spcsemifinals', function (Blueprint $table) {
            $table->id();
            $table->string('namapeserta');
            $table->integer('scorepenyajian');
            $table->integer('scoresubs');
            $table->integer('scorekualitas');
            $table->text('penyajian');
            $table->text('subs');
            $table->text('kualitas');
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
        Schema::dropIfExists('spcsemifinals');
    }
};
