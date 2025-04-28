<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductionRequestModel extends Model
{
    use HasFactory;

    protected $table = 't_production_request';
    protected $primaryKey = 'id_prod_request';

    protected $fillable = ['status', 'requested_by', 'keterangan'];

    public function prodreq():BelongsTo{
        return $this->BelongsTo(AkunUserModel::class, 'requested_by', 'id_akun');
    }

    public function detail():HasMany{
        return $this->hasMany(ProductionRequestDetailModel::class, 'id_prod_req', 'id_prod_req');
    }

    public function approval():HasMany{
        return $this->HasMany(ApprovalMaterialModel::class, 'id_prod_req', 'id_prod_req');
    }
}
