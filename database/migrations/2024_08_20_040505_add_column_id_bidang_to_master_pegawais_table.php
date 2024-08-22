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
        Schema::table('master_pegawais', function (Blueprint $table) {
            $table->unsignedBigInteger('id_bidang');
            $table->foreign('id_bidang')->references('id')->on('bidangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('master_pegawais', function (Blueprint $table) {
            $table->dropColumn('id_bidang');
        });
    }
};
