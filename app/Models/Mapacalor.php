<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapacalor extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_maps',
        'id_sector',
        'serie_modelo',
        'fecha',
        'idhr',
        'tipo_dato',
        'correlativo',
        'lat',
        'lon1',
        'lon2',
        'lon3',
        'lon4',
        'lon5',
        'lon6',
        'lon7',
        'lon8',
        'lon9',
        'lon10',
        'lon11',
        'lon12',
        'lon13',
        'lon14',
        'lon15',
        'lon16',
        'lon17',
        'lon18',
        'lon19',
        'lon20',
        'lon21',
        'lon22',
        'lon23',
        'lon24',
        'lon25',
        'lon26',
        'lon27',
        'lon28',
        'lon29',
        'lon30',
        'lon31',
        'lon32',
        'lon33',];

    protected $guarded = ['id_maps'];
	protected $primaryKey = 'id_maps';
}

