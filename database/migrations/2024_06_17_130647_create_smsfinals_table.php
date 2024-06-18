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
        Schema::create('smsfinals', function (Blueprint $table) {
            $table->id();
            $table->string('namateam');
            $table->string('peserta1');
            $table->string('peserta2');
            $table->string('peserta3');
            $table->string('peserta4');
            $table->string('peserta5');
            $table->string('juri');
            $table->integer('skorkrit1');
            $table->string('krit1');
            $table->integer('skorkrit2');
            $table->string('krit2');
            $table->integer('skorkrit3');
            $table->string('krit3');
            $table->integer('skorkrit4');
            $table->string('krit4');
            $table->integer('skorkrit5');
            $table->string('krit5');
            $table->integer('skorkrit6');
            $table->string('krit6');
            $table->integer('skorkrit7');
            $table->string('krit7');
            $table->integer('skorkrit8');
            $table->string('krit8');
            $table->integer('skorkrit9');
            $table->string('krit9');
            $table->integer('skorkrit10');
            $table->string('krit10');
            $table->integer('skorkrit11');
            $table->string('krit11');
            $table->integer('skorkrit12');
            $table->string('krit12');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smsfinals');
    }
};
