<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsables extends Model
{
    use HasFactory;
    protected $table = 'responsable';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'telefono',
        'fecha_creacion',
        'fecha_modificacion'
    ];
}
