<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('berita_pengumuman', function (Blueprint $table) {
            $table->id('id_berita_pengumuman'); // primary key auto increment
            $table->date('tanggal'); // tanggal berita/pengumuman
            $table->string('judul', 255); // judul berita
            $table->text('deskripsi'); // isi berita / pengumuman
            $table->string('kategori', 100)->nullable(); // kategori berita/pengumuman
            $table->string('gambar', 255)->nullable(); // path gambar
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('berita_pengumuman');
    }
};
