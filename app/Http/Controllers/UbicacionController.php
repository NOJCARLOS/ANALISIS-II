<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use App\Http\Requests\StoreUbicacionRequest;
use App\Http\Requests\UpdateUbicacionRequest;

use Illuminate\Support\Facades\Log;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ubicacion');//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUbicacionRequest $request)
    {
        Log::info('Formulario recibido', $request->all()); // Esto registrará los datos del formulario en `laravel.log`
        $data = $request->validate([
            'numero_oficina' => 'required|integer|max:255',
            'direccion' => 'required|string|max:255',
            'municipio_id' => 'required|exists:municipios,id',
            'auxiliatura' => 'boolean',
            'activo' => 'required|boolean',
        ]);
         // Guardar en la base de datos
        $ubicacion = new Ubicacion();
        $ubicacion->numero_oficina = $data['numero_oficina'];
        $ubicacion->direccion = $data['direccion'];
        $ubicacion->municipio = $data['municipio_id'];
        $ubicacion->auxiliatura = $data['auxiliatura'] ?? false;
        $ubicacion->activo = $data['activo'] ?? false;
        $ubicacion->save();
        return redirect()->with('success', 'Datos guardados exitosamente.'); //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUbicacionRequest $request, Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ubicacion $ubicacion)
    {
        //
    }
}
