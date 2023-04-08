<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UbicacionMuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        //
        DB::table('ubicacionmueble')->insert([
            'piso' => '3',
            'bloque' => '4',
            'sala' => 'Oficina',
            'descripcion'=> 'estan cerca de los laboratorios',
            'fecha_creacion' => $fechaActual ,
            'fecha_modificacion' => $fechaActual ,
        ]);
        DB::table('ubicacionmueble')->insert([
            'piso' => '3',
            'bloque' => '4',
            'sala' => 'Laboratorio',
            'descripcion'=> 'estan cerca de los banos',
            'fecha_creacion' => $fechaActual ,
            'fecha_modificacion' => $fechaActual ,
        ]);
    }
}
