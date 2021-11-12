<?php

namespace App\Http\Livewire\Productos;

use App\Models\Teclado;
use Livewire\Component;

class Indexteclado extends Component
{
    public function render()
    {

        $productos =  Teclado::paginate(20);
        return view('livewire.productos.indexteclado',compact('productos'));



    }
}
