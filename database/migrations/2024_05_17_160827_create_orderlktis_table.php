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
        Schema::create('orderlktis', function (Blueprint $table) {
            $table->id();
            $table->string('kompetisi');
            $table->string('nama');
            $table->string('email');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('npm');
            $table->string('jeniskelamin');
            $table->string('alamatlengkap');
            $table->bigInteger('nomorhp');
            $table->string('ktm');
            $table->string('foto');
            $table->string('krs');
            $table->string('buktifollow');
            $table->string('instansi');
            $table->string('surat_delegasi');
            $table->string('nama_kegiatan')->nullable();
            $table->string('jenis_kegiatan')->nullable();
            $table->string('tingkat_kegiatan')->nullable();
            $table->string('sertifikat')->nullable();
            $table->string('nama_kegiatan1')->nullable();
            $table->string('jenis_kegiatan1')->nullable();
            $table->string('tingkat_kegiatan1')->nullable();
            $table->string('sertifikat1')->nullable();
            $table->string('nama_kegiatan2')->nullable();
            $table->string('jenis_kegiatan2')->nullable();
            $table->string('tingkat_kegiatan2')->nullable();
            $table->string('sertifikat2')->nullable();
            $table->string('nama_kegiatan3')->nullable();
            $table->string('jenis_kegiatan3')->nullable();
            $table->string('tingkat_kegiatan3')->nullable();
            $table->string('sertifikat3')->nullable();
            $table->string('nama_kegiatan4')->nullable();
            $table->string('jenis_kegiatan4')->nullable();
            $table->string('tingkat_kegiatan4')->nullable();
            $table->string('sertifikat4')->nullable();
            $table->string('nama_kegiatan5')->nullable();
            $table->string('jenis_kegiatan5')->nullable();
            $table->string('tingkat_kegiatan5')->nullable();
            $table->string('sertifikat5')->nullable();
            $table->string('nama_kegiatan6')->nullable();
            $table->string('jenis_kegiatan6')->nullable();
            $table->string('tingkat_kegiatan6')->nullable();
            $table->string('sertifikat6')->nullable();
            $table->string('nama_kegiatan7')->nullable();
            $table->string('jenis_kegiatan7')->nullable();
            $table->string('tingkat_kegiatan7')->nullable();
            $table->string('sertifikat7')->nullable();
            $table->string('nama_kegiatan8')->nullable();
            $table->string('jenis_kegiatan8')->nullable();
            $table->string('tingkat_kegiatan8')->nullable();
            $table->string('sertifikat8')->nullable();
            $table->string('nama_kegiatan9')->nullable();
            $table->string('jenis_kegiatan9')->nullable();
            $table->string('tingkat_kegiatan9')->nullable();
            $table->string('sertifikat9')->nullable();
            $table->bigInteger('price');
            $table->enum('status', ['Unpaid', 'Paid']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderlktis');
    }
};
