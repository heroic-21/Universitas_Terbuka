<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniUt extends Model
{
    use HasFactory;

    protected $table = 'alumni_ut';

    protected $primaryKey = 'id_alumni';

    public $incrementing = true;

    protected $fillable = [
        'id_alumni',
        'gambar',
        'nama',
        'jabatan',
        'kesan',
    ];
}
