<?php

use App\Models\Order;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order');
            $table->string('kompetisi');
            $table->string('namateam');
            $table->string('nama_1');
            $table->string('email_1');
            $table->string('fakultas_1');
            $table->string('prodi_1');
            $table->string('npm_1');
            $table->string('jeniskelamin_1');
            $table->string('alamatlengkap_1');
            $table->string('nomorhp_1');
            $table->string('ktm_1')->nullable;
            $table->string('foto_1')->nullable;
            $table->string('krs_1')->nullable;
            $table->string('buktifollow_1')->nullable;
            $table->string('twibbon')->nullable;
            $table->string('nama_2');
            $table->string('email_2');
            $table->string('fakultas_2');
            $table->string('prodi_2');
            $table->string('npm_2');
            $table->string('jeniskelamin_2');
            $table->string('alamatlengkap_2');
            $table->string('nomorhp_2');
            $table->string('ktm_2');
            $table->string('foto_2');
            $table->string('krs_2');
            $table->string('buktifollow_2');
            $table->string('twibbon2')->nullable;
            $table->bigInteger('price');
            $table->string('instansi');
            $table->string('surat_delegasi')->nullable;
            $table->enum('status', ['Unpaid', 'Paid']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
