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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->increments('id_user');
            $table->unsignedInteger('id_bidang');
            $table->unsignedInteger('id_role');
            $table->string('nama');
            $table->string('username');
            $table->string('password');
            $table->timestamps();

            $table->foreign('id_bidang')->references('id_bidang')->on('bidangs')->onDelete('cascade');
            $table->foreign('id_role')->references('id_role')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
