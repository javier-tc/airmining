<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csinopticos extends Model
{
    use HasFactory;
    protected $fillable = [
        'sin_fecha',
        'sin_id_proyecto',
        'sin_cma1',
        'sin_cma2',
        'sin_cma3',
        'sin_cma4',
        'sin_cma5',
        'sin_cma6',
        'sin_prob1',
        'sin_prob2',
        'sin_prob3',
        'sin_prob4',
        'sin_prob5',
        'sin_prob6',
        'sin_dat1',
        'sin_dat2',
        'sin_dat3',
        'sin_dat4',
        'sin_dat5',
        'sin_dat6',
        'sin_estado'

    ];

    protected $guarded = ['id_sin'];
	protected $primaryKey = 'id_sin';

}


