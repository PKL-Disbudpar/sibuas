<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
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
        return $this->belongsTo(Bidang::class);
    }

    public function surat_tugas()
    {
        return $this->hasOne(SuratTugas::class);
    }

    protected $table = 'penggunas';
}
