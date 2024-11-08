<?php
namespace App\Livewire;
use Livewire\WithPagination;
use App\Models\Ubicacion;
use App\Models\pais;
use App\Models\departamento;
use App\Models\municipio;
use Illuminate\Http\Request;
use Livewire\Component;

class Ubicaciones extends Component
{
    use WithPagination;
    public $pais_id;
    public $departamento_id;
    public $municipio_id;
    public $numero_oficina;



    public function render(Request $request)
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

        // Aplicar los filtros condicionalmente
        if ($this->pais_id) {
            $query->whereHas('municipio.departamento.pais', function ($q) {
                $q->where('id', $this->pais_id);
            });
        }

        if ($this->departamento_id) {
            $query->whereHas('municipio.departamento', function ($q) {
                $q->where('id', $this->departamento_id);
            });
        }

        if ($this->municipio_id) {
            $query->whereHas('municipio', function ($q) {
                $q->where('id', $this->municipio_id);
            });
        }

        if ($this->numero_oficina) {
            $query->where('numero_oficina', $this->numero_oficina);
        }

        $ubicaciones = $query->paginate(5);


        return view('livewire.ubicaciones', [
            'ubicaciones' => $ubicaciones,
            'paises' => Pais::all(),
            'departamentos' => Departamento::all(),
            'municipios' => Municipio::all()
        ]);
    }
    public function updating($field)
    {
        // Este método se llama cuando cualquier filtro cambia.
        $this->resetPage(); // Resetea la paginación al cambiar cualquier filtro
    }
    public function filtrarUbicaciones()
    {
        
    }
    public function delete($id)
    {
        $ubicacion = Ubicacion::find($id);

        if ($ubicacion) {
            $ubicacion->delete();
            session()->flash('message', 'Ubicación eliminada con éxito.');
        }
    }


}
