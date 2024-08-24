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
        Schema::create('pesertaspcs', function (Blueprint $table) {
            $table->id();
            $table->string('instansi');
            $table->string('nama');
            $table->string('email');
            $table->string('foto');
            $table->string('nohp');
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
        Schema::dropIfExists('pesertaspcs');
    }
};
