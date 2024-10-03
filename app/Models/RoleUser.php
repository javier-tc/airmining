<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;
    protected $table = "role_user";

    protected $fillable = [
        'id_ru',
        'user_id',
        'role_id',
        'ru_estado',
 ];

    protected $guarded = ['id_ru'];
	protected $primaryKey = 'id_ru';
}
