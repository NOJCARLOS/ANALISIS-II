<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ubicacion;
use App\Models\pais;
use App\Models\departamento;
use App\Models\municipio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use function Illuminate\Log\log;

class Crearubicacion extends Component
{
    public $numero_oficina;
    public $direccion;
    public $pais_id;
    public $departamento_id;
    public $municipio_id;
    public $auxiliatura = false; // valor por defecto
    public $activo = true; // valor por defecto


    public function render()
    {
        $query = Ubicacion::with([
            'municipio' => function ($query) {
                $query->select('id', 'name', 'id_departamento');
            },
            'municipio.departamento' => function ($query) {
                $query->select('id', 'name', 'id_pais');
            },
            'municipio.departamento.pais' => function ($query) {
                $query->select('id', 'name');
            }            
        ]);
        $ubicaciones = $query->get();
        return view('livewire.crearubicacion', [
            'ubicaciones' => $ubicaciones,
            'paises' => Pais::all(),
            'departamentos' => Departamento::all(),
            'municipios' => Municipio::all()
        ]);

    }
    public function store1(Request $request)
    {
        
        Log::info('Formulario recibido', $request->all()); // Esto registrará los datos del formulario en `laravel.log`
        
    }
    public function store()
    {
        // Validación y guardado de los datos
        $this->validate([
            'numero_oficina' => 'required|integer|unique:ubicacion',
            'direccion' => 'required|string|max:255',
            'municipio_id' => 'required|exists:municipio,id',
            'auxiliatura' => 'boolean',
            'activo' => 'boolean',
        ]);

        Ubicacion::create([
            'numero_oficina' => $this->numero_oficina,
            'address' => $this->direccion,
            'id_municipio' => $this->municipio_id,
            'is_auxiliatura' => $this->auxiliatura,
            'state' => $this->activo,
        ]);

        session()->flash('success', 'Datos guardados exitosamente.');
        return redirect()->route('ubicaciones');
    }
}
