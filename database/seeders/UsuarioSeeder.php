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
        DB::table('users')->insert([
            'name' => "Alfredo",
            'email' => "dlasuncion30@gmail.com",
            'password' => bcrypt("1234"),
            'perfil_idperfil'=> 1,
            'created_at' => $fechaActual,
            'updated_at' => $fechaActual,
        ]);
        DB::table('users')->insert([
            'name' => "Luis",
            'email' => "dlasuncion50@gmail.com",
            'password' => bcrypt("1234"),
            'perfil_idperfil'=> 2,
            'created_at' => $fechaActual,
            'updated_at' => $fechaActual,
        ]);
        DB::table('users')->insert([
            'name' => "Jose",
            'email' => "dlasuncion40@gmail.com",
            'password' => bcrypt("1234"),
            'perfil_idperfil'=> 2,
            'created_at' => $fechaActual,
            'updated_at' => $fechaActual,
        ]);
    }
}
