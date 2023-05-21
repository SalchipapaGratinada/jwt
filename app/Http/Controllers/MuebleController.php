<?php

namespace App\Http\Controllers;

use App\Models\Mueble;
use Illuminate\Http\Request;
use Carbon\Carbon;


class MuebleController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        /* $results = DB::select('SELECT mu.id as id, mu.serial as serial, ubim.sala as ubicacionmueble_id, res.nombre as responsable_id, tm.nombre as tipomueble_id, mu.fecha_creacion, mu.fecha_modificacion
        FROM mueble AS mu
        INNER JOIN ubicacionmueble AS ubim ON mu.ubicacionmueble_id = ubim.id
        INNER JOIN responsable AS res ON mu.responsable_id = res.id
        INNER JOIN tipomueble AS tm ON mu.tipomueble_id = tm.id;'); */

        $response = array(
            'status'=> true,
            'data'=> Mueble::all()
        );
        return json_encode($response);
        /* return Mueble::all(); */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['fecha_creacion'=>$fechaActual]);
        $request->merge(['fecha_modificacion'=>$fechaActual]);

        Mueble::create($request->all());
        return['Estado:' => true, 'Msj:' => 'El Mueble Fue Creado Con Exito.'];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Mueble::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['fecha_modificacion'=>$fechaActual]);

        $mueble = Mueble::find($id);
        $mueble->update($request->all());
        return['Estado:' => true, 'Msj:' => 'El Mueble Fue Actualizado Con Exito.', $mueble];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mueble = Mueble::find($id);
        $mueble->delete();
        return['Estado:' => true, 'Msj:' => 'El Mueble Fue Eliminado Con Exito.'];
    }
}
