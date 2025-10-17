<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnduhBerkas extends Model
{
    use HasFactory;

    protected $table = 'unduh_berkas';

    protected $primaryKey = 'id_berkas';

    public $incrementing = true;

    protected $fillable = [
        'id_berkas',
        'berkas',
        'nama_berkas',
    ];
}
