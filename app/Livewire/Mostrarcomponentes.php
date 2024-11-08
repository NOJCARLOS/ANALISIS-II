<?php

namespace App\Livewire;

use Livewire\Component;

class Mostrarcomponentes extends Component
{
    public $ubicaciones;
    public $componenteActual = 'ubicaciones';
    public function updating($field)
    {
        // Este método se llama cuando cualquier filtro cambia.
        $this->resetPage(); // Resetea la paginación al cambiar cualquier filtro
    }
    public function render()
    {
        return view('livewire.mostrarcomponentes');
    }
    public function mostrarComponente($componente)
    {
        $this->componenteActual = $componente;    
    }

}
