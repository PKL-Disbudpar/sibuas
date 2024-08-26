<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_bidang',
        'kode_bidang',
    ];

    public function pengguna()
    {
        return $this->hasOne(Pengguna::class);
    }

    public function surat_tugas()
    {
        return $this->hasOne(SuratTugas::class);
    }

    public function masterPegawai()
    {
        return $this->hasOne(MasterPegawai::class);
    }

    protected $table = 'bidangs';
}
