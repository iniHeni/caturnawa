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
        Schema::create('smfinals', function (Blueprint $table) {
            $table->id();
            $table->string('namateam');
            $table->string('peserta1');
            $table->string('peserta2');
            $table->string('peserta3');
            $table->string('peserta4');
            $table->string('peserta5');
            $table->string('juri');
            $table->integer('skorkrit1');
            $table->integer('skorkrit2');
            $table->integer('skorkrit3');
            $table->integer('skorkrit4');
            $table->integer('skorkrit5');
            $table->integer('skorkrit6');
            $table->integer('skorkrit7');
            $table->integer('skorkrit8');
            $table->integer('skorkrit9');
            $table->integer('skorkrit10');
            $table->text('note');
            $table->float('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smfinals');
    }
};
