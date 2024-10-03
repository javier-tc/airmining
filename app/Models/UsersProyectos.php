<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersProyectos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_up',
        'user_id',
        'rolep_id',
        'proyecto_id',
        'up_estado',
 ];

    protected $guarded = ['id_up'];
	protected $primaryKey = 'id_up';


}
