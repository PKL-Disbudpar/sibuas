<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id_spt',
        'nip_pegawai',
        'id_user',
        'id_bidang',
        'tujuan_spt',
        'tgl_spt',
        'nama_spt',
        'ttd',
    ];

    public function masterPegawai()
    {
        return $this->belongsTo(MasterPegawai::class);
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }
}
