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
        Schema::create('spcsemifinals', function (Blueprint $table) {
            $table->id();
            $table->string('university');
            $table->string('namapeserta');
            $table->integer('krit1para1');
            $table->integer('krit1para2');
            $table->integer('krit1para3');
            $table->integer('krit1para4');
            $table->integer('krit1para5');
            $table->integer('krit1para6');
            $table->integer('krit1para7');
            $table->integer('krit2para1');
            $table->integer('krit2para2');
            $table->integer('krit2para3');
            $table->integer('krit2para4');
            $table->integer('krit2para5');
            $table->integer('krit2para6');
            $table->integer('krit2para7');
            $table->integer('krit3para1');
            $table->integer('krit3para2');
            $table->integer('krit3para3');
            $table->integer('krit3para4');
            $table->integer('krit3para5');
            $table->integer('krit3para6');
            $table->integer('krit3para7');
            $table->integer('scorepemaparanmateri');
            $table->integer('scorepertanyaandanjawaban');
            $table->integer('scoreaspekkesesuaian');
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
        Schema::dropIfExists('spcsemifinals');
    }
};
