<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UbicacionMueble extends Model
{
    use HasFactory;
    protected $table = 'ubicacionmueble';
    public $timestamps = false;
    protected $fillable = [
        'piso',
        'bloque',
        'sala',
        'descripcion',
        'fecha_creacion',
        'fecha_modificacion'
    ];
}
