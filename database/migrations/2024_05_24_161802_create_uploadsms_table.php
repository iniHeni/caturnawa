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
        Schema::create('uploadsms', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('instansi');
            $table->string('poster');
            $table->string('script');
            $table->string('karya');
            $table->string('cipta');
            $table->string('story');
            $table->string('sipnosis');
            $table->string('ori');
            $table->string('linkvidio');
            $table->string('shortlist');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploadsms');
    }
};
