<?php

namespace App\Http\Controllers;

use App\Models\TipoMueble;
use Illuminate\Http\Request;
use Carbon\Carbon;


class TipoMuebleController extends Controller
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
        $response = array(
            'status'=> true,
            'data'=> TipoMueble::all()
        );
        return json_encode($response);
        /* return TipoMueble::all(); */
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

        TipoMueble::create($request->all());
        return['Estado:' => true, 'Msj:' => 'El Tipo Mueble Fue Creado Con Exito.'];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return TipoMueble::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['fecha_modificacion'=>$fechaActual]);

        $tipomueble = TipoMueble::find($id);
        $tipomueble->update($request->all());
        return['Estado:' => true, 'Msj:' => 'El Tipo Mueble Fue Actualizado Con Exito.', $tipomueble];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tipomueble = TipoMueble::find($id);
        $tipomueble->delete();
        return['Estado:' => true, 'Msj:' => 'El Tipo Mueble Fue Eliminado Con Exito.'];
    }
}
