<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('brosur', function (Blueprint $table) {
            $table->id('id_brosur'); // Primary key auto increment
            $table->string('brosur', 255); // path/nama file brosur
            $table->string('judul_brosur', 255); // judul brosur
            $table->string('kategori_brosur', 100); // kategori brosur
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('brosur');
    }
};
