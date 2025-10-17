<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;

    protected $table = 'program_studi';

    protected $primaryKey = 'kode_program_studi';

    public $incrementing = false;

    protected $keyType = 'string'; // Jika primary key berupa string
    
    protected $fillable = [
        'kode_program_studi',
        'program_studi',
        'keterangan_prodi',
        'link_prodi_ut',
        'id_pendidikan',
        'id_fakultas',
        'icon'
    ];

    public function pendidikan(){
        return $this->belongsTo(Pendidikan::class, 'id_pendidikan', 'id_pendidikan');
    }

    public function fakultas(){
        return $this->belongsTo(Fakultas::class, 'id_fakultas', 'id_fakultas');
    }
    
}
