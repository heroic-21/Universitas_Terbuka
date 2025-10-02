<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('informasi_pendaftaran', function (Blueprint $table) {
            $table->id('id_informasi_pendaftaran'); // PK auto increment
            $table->date('tanggal_rpl')->nullable(); // tanggal khusus RPL
            $table->date('tanggal_non_rpl')->nullable(); // tanggal non-RPL
            $table->text('keterangan_rpl')->nullable(); // keterangan tambahan
            $table->text('keterangan_non_rpl')->nullable(); // keterangan tambahan
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informasi_pendaftaran');
    }
};
