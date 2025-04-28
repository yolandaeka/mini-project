<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MaterialsModel extends Authenticatable {

    use HasFactory;

    protected $table = 'm_materials';
    protected $primaryKey = 'id_materials';

    protected $fillable  = ['nama', 'unit', 'stok', 'kode'];

    public function batchMaterial():HasMany{
        return $this->hasMany(BatchMaterialModel::class, 'id_materials', 'id_materials');

    }

    public function prodReq():HasMany{
        return $this->hasMany(ProductionRequestDetailModel::class, 'id_materials', 'id_materials');
    }
    

}



?>