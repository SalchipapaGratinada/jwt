<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class SedesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('sedes')->insert([
            'nombre' => Str::random(5),
            'ubicasede' => Str::random(10),
            'fecha_creacion' => '2023-4-6',
            'fecha_modificacion' => '2023-4-6',
        ]);
        DB::table('sedes')->insert([
            'nombre' => Str::random(5),
            'ubicasede' => Str::random(10),
            'fecha_creacion' => '2023-4-6',
            'fecha_modificacion' => '2023-4-6',
        ]);
    }
}
