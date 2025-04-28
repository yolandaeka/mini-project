<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BatchMaterialModel extends Model
{
    use HasFactory;

    protected $table = 't_batch_material';
    protected $primaryKey = 'id_batch';

    protected $fillable = ['id_materials', 'batch_kode', 'quantity', 'tgl_terima'];

    public function batchMaterial():BelongsTo{
        return $this->BelongsTo(MaterialsModel::class, 'id_materials', 'id_materials');
    }
}
