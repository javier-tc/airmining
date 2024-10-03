<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolProyectos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_rol',
        'rolp_nombre',
        'rolp_descripcion',
        'rolp_estado'
 ];

    protected $guarded = ['id_rol'];
	protected $primaryKey = 'id_rol';

}
