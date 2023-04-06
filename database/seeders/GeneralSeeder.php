<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;




class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('general')->insert([
            'nombre' => Str::random(5),
            'costo' => random_int(1, 1000),
            'estado' => 'Activo',
            'descripcion' => Str::random(20),
            'sede_id' => 1,
            'mueble_id' => null,
            'inmueble_id' => 2,
            'fecha_creacion' => '2023-4-6',
            'fecha_modificacion' => '2023-4-6',
        ]);
    }
}
