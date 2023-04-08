<?php


namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Perfil::all();
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

        Perfil::create($request->all());
        return['Estado:' => true, 'Msj:' => 'El Perfil Fue Creado Con Exito.'];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Perfil::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['fecha_modificacion'=>$fechaActual]);

        $perfil = Perfil::find($id);
        $perfil->update($request->all());
        return['Estado:' => true, 'Msj:' => 'El Perfil Fue Actualizado Con Exito.', $perfil];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $perfil = Perfil::find($id);
        $perfil->delete();
        return['Estado:' => true, 'Msj:' => 'El Perfil Fue Eliminado Con Exito.'];
    }
}
