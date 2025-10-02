<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tentang_kami', function (Blueprint $table) {
            $table->id(); // id auto increment
            $table->string('gambar', 255)->nullable(); // foto / path gambar admin
            $table->string('admin', 100); // nama admin
            $table->string('jabatan', 100); // jabatan admin
            $table->text('tentang_admin')->nullable(); // deskripsi singkat admin
            $table->string('kontak_wa', 20)->nullable(); // nomor whatsapp
            $table->string('instagram', 150)->nullable(); // username/link Instagram
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tentang_kami');
    }
};
