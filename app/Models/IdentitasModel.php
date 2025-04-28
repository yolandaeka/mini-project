<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\Access\Authorizable;

class IdentitasModel extends Model
{
    use HasFactory;

    protected $table = 'm_identitas';
    protected $primaryKey = 'id_identitas';

    protected $fillable = ['noPegawai', 'nama', 'email', 'alamat', 'jenis_kelamin','foto_profil'];

    public function akunuser():HasMany{
        return $this->hasMany(AkunUserModel::class, 'id_identtias', 'id_identitas');
    }


}
