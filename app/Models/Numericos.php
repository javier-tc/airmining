<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Numericos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_numerico',
        'num_id_modelo',
        'num_fc_creacion',
        'num_datoso2',
        'num_rangeso2',
        'num_datopm10',
        'num_rangepm10',
        'num_datows',
        'num_rangews',
        'num_datowd',
        'num_estacion',
        'num_estado',

 ];

    protected $guarded = ['id_numerico'];
	protected $primaryKey = 'id_numerico';

}
