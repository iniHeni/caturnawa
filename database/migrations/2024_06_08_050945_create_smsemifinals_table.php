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
        Schema::create('smsemifinals', function (Blueprint $table) {
            $table->id();
            $table->string('university');
            $table->string('peserta1');
            $table->string('kriteria1');
            $table->integer('bobot1');
            $table->string('peserta2');
            $table->string('kriteria2');
            $table->integer('bobot2');
            $table->string('peserta3');
            $table->string('kriteria3');
            $table->integer('bobot3');
            $table->string('peserta4');
            $table->string('kriteria4');
            $table->integer('bobot4');
            $table->string('peserta5');
            $table->string('kriteria5');
            $table->string('kriteria6');
            $table->string('kriteria7');
            $table->string('kriteria8');
            $table->string('kriteria9');
            $table->string('kriteria10');
            $table->integer('bobot5');
            $table->integer('bobot6');
            $table->integer('bobot7');
            $table->integer('bobot8');
            $table->integer('bobot9');
            $table->integer('bobot10');
            $table->integer('score');
            $table->integer('rank');
            $table->string('juri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smsemifinals');
    }
};
