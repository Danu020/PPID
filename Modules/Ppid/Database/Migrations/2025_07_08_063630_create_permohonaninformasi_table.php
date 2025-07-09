<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonaninformasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonaninformasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemohon');
            $table->string('nik');
            $table->string('alamat_pemohon');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->string('informasi_yang_dibutuhkan');
            $table->string('alasan_permohonan');
            $table->string('status')->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permohonaninformasi');
    }
}
