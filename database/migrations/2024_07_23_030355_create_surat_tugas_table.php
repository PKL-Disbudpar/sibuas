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
        Schema::create('surat_tugas', function (Blueprint $table) {
            $table->increments('id_spt');
            $table->unsignedInteger('nip_pegawai');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_bidang');
            $table->string('tujuan_spt');
            $table->string('tgl_spt');
            $table->string('nama_spt');
            $table->string('ttd');
            $table->timestamps();

            $table->foreign('nip_pegawai')->references('nip_pegawai')->on('master_pegawais')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('penggunas')->onDelete('cascade');
            $table->foreign('id_bidang')->references('id_bidang')->on('bidangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_tugas');
    }
};
