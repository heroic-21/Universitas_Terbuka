<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->string('id_fakultas', 10)->primary(); // PK
            $table->string('fakultas', 255); // nama fakultas
            $table->text('keterangan_fakultas')->nullable(); // bisa null
            $table->string('link_fakultas_ut', 255)->nullable(); // link opsional
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fakultas');
    }
};
