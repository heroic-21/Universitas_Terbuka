<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPendaftaran extends Model
{
    use HasFactory;

    protected $table = 'informasi_pendaftaran';

    protected $primaryKey = 'id_informasi_pendaftaran';

    public $incrementing = true;

    protected $fillable = [
        'id_informasi_pendaftaran',
        'tanggal_rpl',
        'tanggal_non_rpl',
        'keterangan_rpl',
        'keterangan_non_rpl',
        'tanggal_rpl_tutup',
        'tanggal_non_rpl_tutup',
    ];
}
