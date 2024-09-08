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
        Schema::create('pesertaedcs', function (Blueprint $table) {
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
            $table->string('logo')->nullable;
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertaedcs');
    }
};
