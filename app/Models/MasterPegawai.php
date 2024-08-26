<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPegawai extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $primaryKey = 'nip_pegawai';
    protected $fillable = [
        'nip_pegawai',
        'nama',
        'jabatan',
        'golongan'
    ];

    public function surat_tugas()
    {
        return $this->hasMany(SuratTugas::class);
    }

    protected $table = "master_pegawais";
}
