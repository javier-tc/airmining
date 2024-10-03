<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estaciones extends Model
{
    use HasFactory;

    protected $fillable = [

        'id_estacion',
        'est_id_proyecto',
        'est_nombre',
        'est_latitud',
        'est_longitud',
        'est_tipo',
        'est_visible',
        'est_estado'

    ];

    protected $guarded = ['id_estacion'];
	protected $primaryKey = 'id_estacion';




}
