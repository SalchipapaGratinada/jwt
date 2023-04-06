<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class MuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('mueble')->insert([
            'serial' => random_int(100000, 100000000),
            'ubicacionmueble_id' => 1,
            'responsable_id' => 1,
            'tipomueble_id'=> 1,
            'fecha_creacion' => '2023-4-6',
            'fecha_modificacion' => '2023-4-6',
        ]);
        DB::table('mueble')->insert([
            'serial' => random_int(100000, 100000000),
            'ubicacionmueble_id' => 2,
            'responsable_id' => 2,
            'tipomueble_id'=> 2,
            'fecha_creacion' => '2023-4-6',
            'fecha_modificacion' => '2023-4-6',
        ]);
    }
}
