<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ResponsableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        //
        DB::table('responsable')->insert([
            'nombre' => Str::random(5),
            'telefono' => strval(random_int(1, 1000)),
            'fecha_creacion' => $fechaActual,
            'fecha_modificacion' => $fechaActual,
        ]);
        DB::table('responsable')->insert([
            'nombre' => Str::random(5),
            'telefono' => strval(random_int(1, 1000)),
            'fecha_creacion' => $fechaActual,
            'fecha_modificacion' => $fechaActual,
        ]);
    }
}
