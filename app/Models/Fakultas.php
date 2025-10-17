<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $table = 'fakultas';

    protected $primaryKey = 'id_fakultas';

    public $incrementing = false;

    protected $keyType = 'string'; // Jika primary key berupa string

    protected $fillable = [
        'id_fakultas',
        'fakultas',
        'keterangan_fakultas',
        'link_fakultas_ut',
        'alias',
    ];

        // Relasi ke Program Studi
    public function prodi()
    {
        // id_fakultas di tabel program_studi mengacu ke id_fakultas di tabel fakultas
        return $this->hasMany(ProgramStudi::class, 'id_fakultas', 'id_fakultas');
    }
}
