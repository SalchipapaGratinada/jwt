<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class InmuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('inmueble')->insert([
            'm2' => random_int(100, 1000),
            'numpisos' =>  random_int(1, 50),
            'numhabitacion' => random_int(1, 1000),
            'ubicacion_inmueble'=> 1,
            'dueno' => Str::random(10),
            'impuestopredial' => 22000.0,
            'tipo_idtipo' =>1,
            'fecha_creacion' => '2023-4-6',
            'fecha_modificacion' => '2023-4-6',
        ]);
        DB::table('inmueble')->insert([
            'm2' => random_int(100, 1000),
            'numpisos' =>  random_int(1, 50),
            'numhabitacion' => random_int(1, 1000),
            'ubicacion_inmueble'=> 2,
            'dueno' => Str::random(10),
            'impuestopredial' => 22000.0,
            'tipo_idtipo' =>2,
            'fecha_creacion' => '2023-4-6',
            'fecha_modificacion' => '2023-4-6',
        ]);
    }
}
