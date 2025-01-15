<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengguna extends Authenticatable
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',

    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'id_bidang');
    }

    public function surat_tugas()
    {
        return $this->hasOne(SuratTugas::class);
    }

    protected $table = 'penggunas';
}
