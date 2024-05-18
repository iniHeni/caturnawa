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
        Schema::create('ordersms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_1');
            $table->string('email_1');
            $table->string('fakultas_1');
            $table->string('prodi_1');
            $table->string('npm_1');
            $table->string('jeniskelamin_1');
            $table->string('alamatlengkap_1');
            $table->bigInteger('nomorhp_1');
            $table->string('ktm_1');
            $table->string('foto_1');
            $table->string('krs_1');
            $table->string('buktifollow_1');
            $table->string('nama_2');
            $table->string('email_2');
            $table->string('fakultas_2');
            $table->string('prodi_2');
            $table->string('npm_2');
            $table->string('jeniskelamin_2');
            $table->string('alamatlengkap_2');
            $table->bigInteger('nomorhp_2');
            $table->string('ktm_2');
            $table->string('foto_2');
            $table->string('krs_2');
            $table->string('buktifollow_2');
            $table->string('nama_3');
            $table->string('email_3');
            $table->string('fakultas_3');
            $table->string('prodi_3');
            $table->string('npm_3');
            $table->string('jeniskelamin_3');
            $table->string('alamatlengkap_3');
            $table->bigInteger('nomorhp_3');
            $table->string('ktm_3');
            $table->string('foto_3');
            $table->string('krs_3');
            $table->string('buktifollow_3');
            $table->string('nama_4');
            $table->string('email_4');
            $table->string('fakultas_4');
            $table->string('prodi_4');
            $table->string('npm_4');
            $table->string('jeniskelamin_4');
            $table->string('alamatlengkap_4');
            $table->bigInteger('nomorhp_4');
            $table->string('ktm_4');
            $table->string('foto_4');
            $table->string('krs_4');
            $table->string('buktifollow_4');
            $table->string('nama_5');
            $table->string('email_5');
            $table->string('fakultas_5');
            $table->string('prodi_5');
            $table->string('npm_5');
            $table->string('jeniskelamin_5');
            $table->string('alamatlengkap_5');
            $table->bigInteger('nomorhp_5');
            $table->string('ktm_5');
            $table->string('foto_5');
            $table->string('krs_5');
            $table->string('buktifollow_5');
            $table->bigInteger('price');
            $table->string('instansi');
            $table->string('linkvidio');
            $table->string('surat_delegasi');
            $table->enum('status', ['Unpaid', 'Paid']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordersms');
    }
};
