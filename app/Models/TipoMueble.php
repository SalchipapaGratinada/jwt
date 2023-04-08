<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMueble extends Model
{
    use HasFactory;
    protected $table = 'tipomueble';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'fecha_creacion',
        'fecha_modificacion'
    ];
}
