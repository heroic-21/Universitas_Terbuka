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
        Schema::create('program_studi', function (Blueprint $table) {
            $table->string('kode_program_studi', 10)->primary();
            $table->string('program_studi', 255);
            $table->text('keterangan_prodi')->nullable();
            $table->decimal('biaya_pendidikan_sipas', 12, 2)->nullable(); // contoh: 1300000.00
            $table->decimal('biaya_pendidikan_non_sipas', 12, 2)->nullable(); // contoh: 36000.00
            $table->string('link_prodi_ut')->nullable();

            // Relasi
            $table->string('id_pendidikan', 10);
            $table->string('id_fakultas');

            $table->timestamps();

            // Foreign Keys
            $table->foreign('id_pendidikan')->references('id_pendidikan')->on('pendidikan')->onDelete('cascade');
            $table->foreign('id_fakultas')->references('id_fakultas')->on('fakultas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_studi');
    }
};
