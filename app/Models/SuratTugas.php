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
        'nip_pegawai',
        'id_user',
        'id_bidang',
        'tujuan_spt',
        'tgl_spt',
        'nama_spt',
        'ttd',
    ];

    /**
     * Relasi dengan tabel MasterPegawai
     */
    public function masterPegawai()
    {
        // Menggunakan kolom nip_pegawai sebagai foreign key
        return $this->belongsTo(MasterPegawai::class, 'nip_pegawai', 'nip');
    }

    /**
     * Relasi dengan tabel Pengguna
     */
    public function pengguna()
    {
        // Menggunakan kolom id_user sebagai foreign key
        return $this->belongsTo(Pengguna::class, 'id_user', 'id');
    }

    /**
     * Relasi dengan tabel Bidang
     */
    public function bidang()
    {
        // Menggunakan kolom id_bidang sebagai foreign key
        return $this->belongsTo(Bidang::class, 'id_bidang', 'id');
    }

    protected $table = 'surat_tugas';
}
