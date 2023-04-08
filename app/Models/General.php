<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;
    protected $table = 'general';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'costo',
        'estado',
        'descripcion',
        'sede_id',
        'mueble_id',
        'inmueble_id',
        'fecha_creacion',
        'fecha_modificacion'
    ];
}
