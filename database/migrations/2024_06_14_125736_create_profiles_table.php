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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id('id_profile');
            $table->unsignedBigInteger('user_id');
            $table->string('web_name', 100)->nullable();
            $table->string('logo', 255)->nullable();
            $table->text('desc_web')->nullable();
            $table->string('email_cont', 50)->nullable();
            $table->string('nohp', 15)->nullable();
            $table->string('instagram', 20)->nullable();
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
        Schema::dropIfExists('profiles');
    }
};