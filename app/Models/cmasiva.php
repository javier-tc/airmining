<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cmasiva extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_cmasiva',
        'cma_id_modelo',
        'cma_fc_creacion',
        'cma_datoso2',
        'cma_estacion',
        'cma_estado'
 ];

    protected $guarded = ['id_cmasiva'];
	protected $primaryKey = 'id_cmasiva';

 



}
