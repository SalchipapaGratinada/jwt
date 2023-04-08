<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TipoMuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        //
        DB::table('tipomueble')->insert([
            'nombre' => 'computador',
            'fecha_creacion' => $fechaActual,
            'fecha_modificacion' => $fechaActual,
        ]);
        DB::table('tipomueble')->insert([
            'nombre' => 'mesa',
            'fecha_creacion' => $fechaActual,
            'fecha_modificacion' => $fechaActual,
        ]);
    }
}
