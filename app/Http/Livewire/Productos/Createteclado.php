<?php

namespace App\Http\Livewire\Productos;

use App\Models\Teclado;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Createteclado extends Component
{

    use WithFileUploads;
    public Teclado $producto;
    public $foto;



    public function mount(){
        $this->producto = new Teclado;
    }

    public function render()
    {
        return view('livewire.productos.createteclado');
    }

    public function crear(){

        $this->validate();
        if($this->foto != null){
        $this->producto->foto = Storage::disk('public')->put ('images/teclados',$this->foto);
         }
        $this->producto->save();
        return redirect(route('productos'));
    }

    protected function rules(){
        return[
            'foto'=>'nullable|image',
            'producto.nombre'=>'required|string',
            'producto.cantidad'=>'numeric|required',
            'producto.precio'=>'numeric'

        ];
    }
}
