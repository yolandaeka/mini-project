<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductionRequestDetailModel extends Model
{
    use HasFactory;

    protected $table = 't_production_request_detail';
    protected $primaryKey = 'id_prod_request_detail';

    protected $fillable = ['id_materials', 'id_prod_req', 'keterangan', 'quantity_requested'];

    public function detail():BelongsTo{
        return $this->BelongsTo(ProductionRequestModel::class, 'id_prod_req', 'id_prod_req');
    }

    public function prodReq():BelongsTo{
        return $this->BelongsTo(MaterialsModel::class, 'id_materials', 'id_materials');
    }


}
