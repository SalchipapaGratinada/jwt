<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    use HasFactory;
    protected $table = 'inmueble';
    public $timestamps = false;
    protected $fillable = [
        'm2',
        'numpisos',
        'numhabitacion',
        'ubicacion_inmueble',
        'dueno',
        'impuestopredial',
        'tipo_idtipo',
        'fecha_creacion',
        'fecha_modificacion'
    ];
}
