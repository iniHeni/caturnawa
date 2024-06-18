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
        Schema::create('day4kdbis', function (Blueprint $table) {
            $table->id();
            $table->integer('ronde');
            $table->string('juri');
            $table->string('team');
            $table->string('posisi');
            $table->string('posisi1');
            $table->string('posisi2');
            $table->string('nama1');
            $table->string('nama2');
            $table->integer('skorindividu1');
            $table->integer('skorindividu2');
            $table->float('total');
            $table->integer('vp')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day4kdbis');
    }
};
