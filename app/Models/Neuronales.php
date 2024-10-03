<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neuronales extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_neuronal',
        'neu_id_modelo',
        'neu_fc_creacion',
        'neu_datoso2',
        'neu_rangeso2',
        'neu_alertso2',
        'neu_datopm10',
        'neu_rangepm10',
        'neu_alertpm10',
        'neu_estacion',
        'neu_estado',
 ];

    protected $guarded = ['id_neuronal'];
	protected $primaryKey = 'id_neuronal';


}
