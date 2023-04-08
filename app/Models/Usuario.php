<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'correo',
        'password',
        'perfil_idperfil',
        'fecha_creacion',
        'fecha_modificacion'
    ];
}
