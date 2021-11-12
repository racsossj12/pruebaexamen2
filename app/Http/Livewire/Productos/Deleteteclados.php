<?php

namespace App\Http\Livewire\Productos;

use App\Models\Teclado;
use Livewire\Component;

class Deleteteclados extends Component
{

    public Teclado $producto;


    public function render()
    {
        return view('livewire.productos.deleteteclados');
    }

    public function eliminar(){
        $this->producto->delete();
        return redirect(route('productos'));
    }
}
