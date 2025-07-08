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
        'kode_jurusan',
        'id_agama',
        'id_pendidikan'
    ];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'kode_jurusan', 'kode_jurusan');
    }
    public function agama(){
        return $this->belongsTo(Agama::class, 'id_agama', 'id_agama');
    }
    public function pendidikan(){
        return $this->belongsTo(Pendidikan::class, 'id_pendidikan', 'id_pendidikan');
    }
}
