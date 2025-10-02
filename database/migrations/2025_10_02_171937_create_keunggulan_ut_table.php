<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('keunggulan_ut', function (Blueprint $table) {
            $table->id('id_keunggulan'); // Primary Key
            $table->string('keunggulan_ut', 255); // Deskripsi singkat keunggulan
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('keunggulan_ut');
    }
};
