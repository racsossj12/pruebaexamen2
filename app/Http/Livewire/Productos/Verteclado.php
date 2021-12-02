<?php

namespace App\Http\Livewire\Productos;

use App\Models\Teclado;
use Livewire\Component;

class Verteclado extends Component
{

    public Teclado $producto;

    public function render()
    {
        return view('livewire.productos.verteclado');
    }
}
