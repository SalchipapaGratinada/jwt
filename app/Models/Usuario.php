<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'password',
        'perfil_idperfil',
        'created_at',
        'updated_at'
    ];
}
