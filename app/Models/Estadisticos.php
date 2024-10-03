<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadisticos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_numerico',
        'esta_id_modelo',
        'esta_fc_creacion',
        'esta_datoso2',
        'esta_rangeso2',
        'esta_datopm10',
        'esta_rangepm10',
        'esta_estacion',
        'esta_estado',

 ];

    protected $guarded = ['id_estadistico'];
	protected $primaryKey = 'id_estadistico';


}
