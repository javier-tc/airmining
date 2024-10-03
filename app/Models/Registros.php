<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
use HasFactory;
protected $fillable = [
    'serie_modelo',
    'fc_creacion',
    'tipo_modelo',
    'tipo_dato',
    'dato',
    'range',
    'alerta',
    'id_estacion',
    'id_user',
    'estado',
];

protected $guarded = ['id_registro'];
protected $primaryKey = 'id_registro';


}

