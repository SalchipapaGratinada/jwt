<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('usuario')->insert([
            'nombre' => Str::random(5),
            'correo' => Str::random(8).'@gmail.com',
            'password' => Hash::make('password'),
            'perfil_idperfil'=> 2,
            'fecha_creacion' => '2023-4-6',
            'fecha_modificacion' => '2023-4-6',
        ]);
        DB::table('usuario')->insert([
            'nombre' => Str::random(5),
            'correo' => Str::random(8).'@gmail.com',
            'password' => Hash::make('password'),
            'perfil_idperfil'=> 1,
            'fecha_creacion' => '2023-4-6',
            'fecha_modificacion' => '2023-4-6',
        ]);
    }
}
