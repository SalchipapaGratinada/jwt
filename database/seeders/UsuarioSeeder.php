<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        //
        DB::table('usuario')->insert([
            'nombre' => Str::random(5),
            'correo' => Str::random(8).'@gmail.com',
            'password' => Hash::make('password'),
            'perfil_idperfil'=> 2,
            'fecha_creacion' => $fechaActual,
            'fecha_modificacion' => $fechaActual,
        ]);
        DB::table('usuario')->insert([
            'nombre' => Str::random(5),
            'correo' => Str::random(8).'@gmail.com',
            'password' => Hash::make('password'),
            'perfil_idperfil'=> 1,
            'fecha_creacion' => $fechaActual,
            'fecha_modificacion' => $fechaActual,
        ]);
    }
}
