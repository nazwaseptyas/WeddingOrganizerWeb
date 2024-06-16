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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id('id_pesan');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('katalog_id');
            $table->string('nama', 150);
            $table->string('email_pesan', 50);
            $table->date('tgl_acara');
            $table->enum('status', ['request', 'approved'])->default('request');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id_users')->on('users');
            $table->foreign('katalog_id')->references('id_katalog')->on('katalogs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};