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
        Schema::create('pesertakdbis', function (Blueprint $table) {
            $table->id();
            $table->string('instansi');
            $table->string('namateam');
            $table->string('nama');
            $table->string('nama1');
            $table->string('email');
            $table->string('email1');
            $table->string('foto');
            $table->string('foto1');
            $table->string('nohp');
            $table->string('nohp1');
            $table->string('status');
            $table->string('logo')->nullable;
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertakdbis');
    }
};
