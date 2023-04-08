<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TipoInmuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        //
        DB::table('tipoinmueble')->insert([
            'nombre' => 'edificio',
            'fecha_creacion' => $fechaActual,
            'fecha_modificacion' => $fechaActual,
        ]);
        DB::table('tipoinmueble')->insert([
            'nombre' => 'Casa',
            'fecha_creacion' => $fechaActual,
            'fecha_modificacion' => $fechaActual,
        ]);
    }
}
