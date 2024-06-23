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
            $table->text('krit1');
            $table->integer('skorkrit2');
            $table->text('krit2');
            $table->integer('skorkrit3');
            $table->text('krit3');
            $table->integer('skorkrit4');
            $table->text('krit4');
            $table->integer('skorkrit5');
            $table->text('krit5');
            $table->integer('skorkrit6');
            $table->text('krit6');
            $table->integer('skorkrit7');
            $table->text('krit7');
            $table->integer('skorkrit8');
            $table->text('krit8');
            $table->integer('skorkrit9');
            $table->text('krit9');
            $table->integer('skorkrit10');
            $table->text('krit10');
            $table->integer('skorkrit11');
            $table->text('krit11');
            $table->integer('skorkrit12');
            $table->text('krit12');
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
