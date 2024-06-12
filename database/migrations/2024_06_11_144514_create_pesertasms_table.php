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
        Schema::create('pesertasms', function (Blueprint $table) {
            $table->id();
            $table->string('instansi');
            $table->string('namateam');
            $table->string('nama');
            $table->string('nama1');
            $table->string('nama2');
            $table->string('nama3');
            $table->string('nama4');
            $table->string('email');
            $table->string('email1');
            $table->string('email2');
            $table->string('email3');
            $table->string('email4');
            $table->string('foto');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto4');
            $table->biginteger('nohp');
            $table->biginteger('nohp1');
            $table->biginteger('nohp2');
            $table->biginteger('nohp3');
            $table->biginteger('nohp4');
            $table->string('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertasms');
    }
};