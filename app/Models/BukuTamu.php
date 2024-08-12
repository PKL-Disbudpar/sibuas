<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_tamu',
        'asal_instansi',
        'jenis_kelamin',
        'no_hp',
        'tgl_pengunjung',
        'keperluan',
    ];

    protected $table = 'buku_tamus';
}
