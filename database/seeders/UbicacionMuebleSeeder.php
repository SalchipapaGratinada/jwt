<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UbicacionMuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ubicacionmueble')->insert([
            'piso' => '3',
            'bloque' => '4',
            'sala' => 'Oficina',
            'descripcion'=> 'estan cerca de los laboratorios',
            'fecha_creacion' => '2023-4-6',
            'fecha_modificacion' => '2023-4-6',
        ]);
        DB::table('ubicacionmueble')->insert([
            'piso' => '3',
            'bloque' => '4',
            'sala' => 'Laboratorio',
            'descripcion'=> 'estan cerca de los banos',
            'fecha_creacion' => '2023-4-6',
            'fecha_modificacion' => '2023-4-6',
        ]);
    }
}
