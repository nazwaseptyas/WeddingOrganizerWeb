<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsultasisTable extends Migration

{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('konsultasis', function (Blueprint $table) {
            $table->id('id_konsultasis');
            $table->unsignedBigInteger('user_id');
            $table->string('nama', 30);
            $table->string('email_konsultasi', 30);
            $table->string('alamat', 50);
            $table->date('tanggal');
            $table->bigInteger('nohp');
            $table->text('keluhan');
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
        Schema::dropIfExists('konsultasis');
    }
};