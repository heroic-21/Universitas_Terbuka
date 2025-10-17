<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brosur extends Model
{
    use HasFactory;

    protected $table = 'brosur';

    protected $primaryKey = 'id_brosur';

    public $incrementing = true;

    protected $fillable = [
        'id_brosur',
        'brosur',
        'judul_brosur',
        'kategori_brosur',
    ];
}
