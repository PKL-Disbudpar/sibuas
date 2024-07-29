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
            $table->id();
            $table->string('nip_pegawai');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_bidang');
            $table->text('tujuan_spt');
            $table->date('tgl_spt');
            $table->string('nama_spt');
            $table->string('ttd');
            $table->timestamps();

            $table->foreign('nip_pegawai')->references('nip_pegawai')->on('master_pegawais')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('penggunas')->onDelete('cascade');
            $table->foreign('id_bidang')->references('id')->on('bidangs')->onDelete('cascade');
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
