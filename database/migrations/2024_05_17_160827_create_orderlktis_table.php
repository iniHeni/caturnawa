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
            $table->string('nama_kegiatan');
            $table->string('jenis_kegiatan');
            $table->string('tingkat_kegiatan');
            $table->string('sertifikat');
            $table->string('nama_kegiatan1');
            $table->string('jenis_kegiatan1');
            $table->string('tingkat_kegiatan1');
            $table->string('sertifikat1');
            $table->string('nama_kegiatan2');
            $table->string('jenis_kegiatan2');
            $table->string('tingkat_kegiatan2');
            $table->string('sertifikat2');
            $table->string('nama_kegiatan3');
            $table->string('jenis_kegiatan3');
            $table->string('tingkat_kegiatan3');
            $table->string('sertifikat3');
            $table->string('nama_kegiatan4');
            $table->string('jenis_kegiatan4');
            $table->string('tingkat_kegiatan4');
            $table->string('sertifikat4');
            $table->string('nama_kegiatan5');
            $table->string('jenis_kegiatan5');
            $table->string('tingkat_kegiatan5');
            $table->string('sertifikat5');
            $table->string('nama_kegiatan6');
            $table->string('jenis_kegiatan6');
            $table->string('tingkat_kegiatan6');
            $table->string('sertifikat6');
            $table->string('nama_kegiatan7');
            $table->string('jenis_kegiatan7');
            $table->string('tingkat_kegiatan7');
            $table->string('sertifikat7');
            $table->string('nama_kegiatan8');
            $table->string('jenis_kegiatan8');
            $table->string('tingkat_kegiatan8');
            $table->string('sertifikat8');
            $table->string('nama_kegiatan9');
            $table->string('jenis_kegiatan9');
            $table->string('tingkat_kegiatan9');
            $table->string('sertifikat9');
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
