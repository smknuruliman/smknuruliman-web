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
        Schema::create('registrasi_pelajar', function (Blueprint $table) {
            $table->id();
            
            // Langkah 1
            $table->string('full_name');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->enum('gender', ['Laki-laki', 'Perempuan', 'Lainnya']);
            $table->string('email');

            // Langkah 2
            $table->string('phone');
            $table->text('address');
            $table->string('prev_school');
            $table->string('nisn')->unique();
            $table->year('graduation_year');

            // Langkah 3
            $table->string('major');
            $table->decimal('avg_grade', 5, 2)->nullable(); // misal nilai 85.50
            $table->text('achievements')->nullable();
            $table->string('parent_name');
            $table->string('photo')->nullable(); // simpan nama file / path foto

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rregistrasi_pelajar');
    }
};
