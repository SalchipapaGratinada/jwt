<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mueble extends Model
{
    use HasFactory;
    protected $table = 'mueble';
    public $timestamps = false;
    protected $fillable = [
        'serial',
        'ubicacionmueble_id',
        'responsable_id',
        'tipomueble_id',
        'fecha_creacion',
        'fecha_modificacion'
    ];
}
