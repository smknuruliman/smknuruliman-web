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
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('hero-title');
            $table->string('profile-desc');
            $table->string('eskul-image');
            $table->string('jurusan-title');
            $table->string('footer-desc');
            $table->string('footer-addres');
            $table->string('footer-sosmed(1)');
            $table->string('footer-sosmed(2)');
            $table->string('footer-email');
            $table->string('footer-phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};
