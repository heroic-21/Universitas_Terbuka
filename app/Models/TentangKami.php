<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangKami extends Model
{
    use HasFactory;

    protected $table = 'tentang_kami';

    protected $primaryKey = 'id_tentang_kami';

    public $incrementing = true;

    protected $fillable = [
        'id_tentang_kami',
        'gambar',
        'admin',
        'jabatan',
        'tentang_admin',
        'kontak_wa',
        'instagram',
    ];
}
