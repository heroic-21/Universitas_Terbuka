<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('unduh_berkas', function (Blueprint $table) {
            $table->id('id_berkas'); // Primary key auto increment
            $table->string('berkas', 255); // nama file atau path berkas
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('unduh_berkas');
    }
};
