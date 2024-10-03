<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_proyecto',
        'pro_nproyecto',
        'pro_fcinicio',
        'pro_fctermino',
        'pro_nresponsable',
        'pro_eresponsable',
        'pro_fonoresponsable',
        'pro_rubro',
        'pro_subrubro',
        'pro_descripcion',
        'pro_estado'

    ];

    protected $guarded = ['id_proyecto'];
	protected $primaryKey = 'id_proyecto';






}
