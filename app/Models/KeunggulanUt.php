<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeunggulanUt extends Model
{
    use HasFactory;

    protected $table = 'keunggulan_ut';

    protected $primaryKey = 'id_keunggulan';

    public $incrementing = true;

    protected $fillable = [
        'id_keunggulan',
        'keunggulan',
    ];
}
