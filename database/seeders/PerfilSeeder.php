<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        //
        DB::table('perfil')->insert([
        'nombre' => 'Usuario',
        'fecha_creacion' => $fechaActual,
        'fecha_modificacion' => $fechaActual,
        ]);
        DB::table('perfil')->insert([
            'nombre' => 'Admin',
            'fecha_creacion' => $fechaActual,
            'fecha_modificacion' => $fechaActual,
        ]);

        $this->call(UsuarioSeeder::class);
        $this->call(ResponsableSeeder::class);
        $this->call(UbicacionMuebleSeeder::class);
        $this->call(TipoMuebleSeeder::class);
        $this->call(TipoInmuebleSeeder::class);
        $this->call(MuebleSeeder::class);
        $this->call(InmuebleSeeder::class);
        $this->call(SedesSeeder::class);
        $this->call(GeneralSeeder::class);
    }
}
