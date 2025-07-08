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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim', 20)->primary(); // PK
            $table->string('nama_lengkap', 255);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->string('nomor_hp', 15);
            $table->string('nomor_nik', 16)->unique();
            $table->string('nama_ibu_kandung', 255);
            $table->string('email', 100)->unique();
            $table->string('default_password'); // encrypted password
            $table->year('tahun_masuk');
            $table->text('keterangan')->nullable();
            $table->boolean('status')->default(1); // aktif/non-aktif
            $table->year('tahun_wisuda')->nullable();
            $table->string('status_pekerjaan', 100)->nullable();
            
            $table->string('kode_jurusan', 10); // FK
            $table->string('id_agama'); // FK
            $table->string('id_pendidikan'); // FK
            $table->timestamps();
            // Foreign keys
            $table->foreign('kode_jurusan')->references('kode_jurusan')->on('jurusan')->onDelete('cascade');
            $table->foreign('id_agama')->references('id_agama')->on('agama')->onDelete('cascade');
            $table->foreign('id_pendidikan')->references('id_pendidikan')->on('pendidikan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
