<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ApprovalMaterialModel extends Model
{
    use HasFactory;

    protected $table = 't_aprroval_material';
    protected $primaryKey = 'id_aprroval_material';

    protected $fillable = ['id_prod_req', 'approved_by', 'tgl_kirim'];

    public function akunuser():BelongsTo{
        return $this->belongsTo(AkunUserModel::class, 'approved_by', 'id_akun');
    }

    public function prodreq():BelongsTo{
        return $this->BelongsTo(ProductionRequestModel::class, 'id_prod_req', 'id_prod_req');
    }
}
