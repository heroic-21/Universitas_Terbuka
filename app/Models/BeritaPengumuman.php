<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaPengumuman extends Model
{
    use HasFactory;

    protected $table = 'berita_pengumuman';

    protected $primaryKey = 'id_berita_pengumuman';

    public $incrementing = true;

    protected $fillable = [
        'id_berita_pengumuman',
        'tanggal',
        'judul',
        'deskripsi',
        'kategori',
        'gambar',
    ];
}
