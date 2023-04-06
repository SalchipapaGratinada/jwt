<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('perfil')->insert([
        'nombre' => 'Usuario',
        'fecha_creacion' => '2023-4-6',
        'fecha_modificacion' => '2023-4-6',
        ]);
        DB::table('perfil')->insert([
            'nombre' => 'Admin',
            'fecha_creacion' => '2023-4-6',
            'fecha_modificacion' => '2023-4-6',
        ]);
    }
}
