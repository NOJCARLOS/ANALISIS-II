<?php

namespace App\Livewire;

use Livewire\Component;

class MostrarcomponentesU extends Component
{
    public $componenteActual = '';
    public function render()
    {
        return view('livewire.mostrarcomponentes-u');
    }
    public function mostrarComponente($componente)
    {
        $this->componenteActual = $componente;    
    }
}
