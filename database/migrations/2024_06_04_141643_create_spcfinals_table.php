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
        Schema::create('spcfinals', function (Blueprint $table) {
            $table->id();
            $table->string('namapeserta');
            $table->integer('scorepemaparanmateri');
            $table->integer('scorepertanyaandanjawaban');
            $table->integer('scoreaspekkesesuaian');
            $table->text('materi');
            $table->text('pertanyaandanjawaban');
            $table->text('kesesuaian');
            $table->integer('total');
            $table->string('juri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spcfinals');
    }
};
