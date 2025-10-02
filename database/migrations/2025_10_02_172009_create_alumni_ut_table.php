<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alumni_ut', function (Blueprint $table) {
            $table->id('id_alumni'); // Primary Key
            $table->string('gambar', 255)->nullable(); // path foto alumni
            $table->string('nama', 150);
            $table->string('jabatan', 150)->nullable();
            $table->text('kesan')->nullable(); // pesan/kesan alumni
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alumni_ut');
    }
};
