<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            [
                'nim' => '1234567890',
                'nama_lengkap' => 'John Doe',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => Carbon::create('2000', '01', '01')->format('Y-m-d'),
                'nomor_hp' => '081234567890',
                'nomor_nik' => '3171010101010101',
                'nama_ibu_kandung' => 'Jane Doe',
                'email' => 'john.doe@example.com',
                'password' => bcrypt('password123'),
                'tahun_masuk' => '2018',
                'keterangan' => 'Aktif',
                'status' => 'Aktif',
                'tahun_wisuda' => '2022',
                'status_pekerjaan' => 'Belum Bekerja',
                'kode_jurusan' => 'SI101',
                'id_agama' => '1',
                'id_pendidikan' => '2',
            ],
            [
                'nim' => '0987654321',
                'nama_lengkap' => 'Jane Smith',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => Carbon::create('2001', '05', '15')->format('Y-m-d'),
                'nomor_hp' => '082345678901',
                'nomor_nik' => '3171010101010102',
                'nama_ibu_kandung' => 'Sarah Smith',
                'email' => 'jane.smith@example.com',
                'password' => bcrypt('password123'),
                'tahun_masuk' => '2019',
                'keterangan' => 'Aktif',
                'status' => 'Aktif',
                'tahun_wisuda' => '2023',
                'status_pekerjaan' => 'Bekerja',
                'kode_jurusan' => 'TI102',
                'id_agama' => '2',
                'id_pendidikan' => '1',
            ]
        ]);
    }
}
