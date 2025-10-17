<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $primaryKey = 'nim';

    public $incrementing = false;

    protected $keyType = 'string'; // Jika primary key berupa string

    protected $fillable = [
        'nim',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'nomor_hp',
        'nomor_nik',
        'nama_ibu_kandung',
        'email',
        'default_password',
        'tahun_masuk',
        'keterangan',
        'status',
        'tahun_wisuda',
        'status_pekerjaan',
        'kode_program_studi',
        'id_agama',
        'id_pendidikan',
        'jenis_kelamin',
        'status_pernikahan',
        'layanan_program',
        'sumber_informasi_ut',
        'jalur_program',
    ];

    public function program_studi(){
        return $this->belongsTo(ProgramStudi::class, 'kode_program_studi', 'kode_program_studi');
    }
    public function agama(){
        return $this->belongsTo(Agama::class, 'id_agama', 'id_agama');
    }
    // public function pendidikan(){
    //     return $this->belongsTo(Pendidikan::class, 'id_pendidikan', 'id_pendidikan');
    // }
}
