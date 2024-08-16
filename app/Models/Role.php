<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */

    protected $fillable = [
        'nama_role',
    ];

    public function pengguna()
    {
        return $this->hasOne(Pengguna::class);
    }

    protected $table = 'roles';
}
