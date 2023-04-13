<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;


class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        //
        DB::table('general')->insert([
            'nombre' => "mesa",
            'costo' => random_int(1, 1000),
            'estado' => 'Activo',
            'descripcion' => "Una Mesita De Noche",
            'sede_id' => 1,
            'mueble_id' => 2,
            'inmueble_id' => 1,
            'fecha_creacion' =>  $fechaActual,
            'fecha_modificacion' =>  $fechaActual,
        ]);
        DB::table('general')->insert([
            'nombre' => "Casa",
            'costo' => random_int(1, 1000),
            'estado' => 'Activo',
            'descripcion' => "Casita De los 3 cerditos",
            'sede_id' => 2,
            'mueble_id' => 1,
            'inmueble_id' => 2,
            'fecha_creacion' =>  $fechaActual,
            'fecha_modificacion' =>  $fechaActual,
        ]);
    }
}
