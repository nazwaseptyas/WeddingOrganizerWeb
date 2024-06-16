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
        Schema::create('katalogs', function (Blueprint $table) {
            $table->id('id_katalog');
            $table->unsignedBigInteger('user_id');
            $table->string('nama_paket', 255);
            $table->text('isi_katalog');
            $table->unsignedBigInteger('biaya');
            $table->string('gambar', 255);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id_users')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalogs');
    }
};