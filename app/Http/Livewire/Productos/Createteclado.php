<?php

namespace App\Http\Livewire\Productos;

use App\Models\Teclado;
use Livewire\Component;

class Createteclado extends Component
{
    public Teclado $producto;


    public function mount(){
        $this->producto = new Teclado;
    }

    public function render()
    {
        return view('livewire.productos.createteclado');
    }

    public function crear(){

        $this->validate();
        $this->producto->save();
        return redirect(route('productos'));
    }

    protected function rules(){
        return[
            'producto.foto'=>'nullable',
            'producto.nombre'=>'required|string',
            'producto.cantidad'=>'numeric|required',
            'producto.precio'=>'numeric'
        ];
    }
}
