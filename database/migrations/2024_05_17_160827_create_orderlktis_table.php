<?php

use App\Models\orderlkti;
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
            $table->string('order');
            $table->string('kompetisi');
            $table->string('nama');
            $table->string('email');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('npm');
            $table->string('jeniskelamin');
            $table->string('alamatlengkap');
            $table->string('nomorhp');
            $table->string('ktm');
            $table->string('foto');
            $table->string('krs');
            $table->string('instansi');
            $table->string('buktifollow');
            $table->string('twibbon');
            $table->string('surat_delegasi');
            $table->string('nama_kegiatan');
            $table->string('jenis_kegiatan');
            $table->string('baru');
            $table->string('tingkat_kegiatan');
            $table->string('sertifikat');
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
            $table->string('baru1')->nullable();
            $table->string('baru2')->nullable();
            $table->string('baru3')->nullable();
            $table->string('baru4')->nullable();
            $table->string('baru5')->nullable();
            $table->string('baru6')->nullable();
            $table->string('baru7')->nullable();
            $table->string('baru8')->nullable();
            $table->string('baru9')->nullable();
            $table->bigInteger('price');
            $table->enum('status', ['Unpaid', 'Paid', 'Khusus']);
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
