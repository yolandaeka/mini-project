<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Node\Expr\Cast\Bool_;
use PhpParser\Node\Expr\Cast\String_;

class AkunUserModel extends Model
{
    use HasFactory;

    protected $table = 't_akun_user';
    protected $primaryKey = 'id_akun';

    protected $fillable = ['id_identitas', 'username', 'id_role'];

    protected $hidden = ['password'];

    protected $casts = ['password' => 'hashed'];

    public function akunuser():BelongsTo{
        return $this->belongsTo(IdentitasModel::class, 'id_identitas', 'id_identitas');
    }

    public function roleuser():BelongsTo{
        return $this->belongsTo(RoleModel::class. 'id_model', 'id_model');
    }

    public function prodreq():HasMany{
        return $this->hasMany(ProductionRequestModel::class, 'requested_by', 'id_akun');
    }

    public function approval():HasMany{
        return $this->hasMany(ApprovalMaterialModel::class, 'approved_by', 'id_akun');
    }

    // get user role

    public function getRoleName():String{
        return $this->roleuser->nama;
    }

    public function hasRole($role):Bool{
        return $this->roleuser->nama == $role;
    }

}
