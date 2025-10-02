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
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable()->after('status_pekerjaan');
            $table->enum('status_pernikahan', ['Belum Menikah', 'Menikah', 'Duda/Janda'])->nullable()->after('jenis_kelamin');
            $table->string('sumber_informasi_ut', 255)->nullable()->after('status_pernikahan');
            $table->string('layanan_program', 255)->nullable()->after('sumber_informasi_ut');
            $table->string('jalur_program', 255)->nullable()->after('layanan_program');
            $table->text('alamat')->nullable()->after('jalur_program');
        });
    }

    public function down(): void
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropColumn([
                'jenis_kelamin',
                'status_pernikahan',
                'sumber_informasi_ut',
                'layanan_program',
                'jalur_program',
                'alamat',
            ]);
        });
    }
};
