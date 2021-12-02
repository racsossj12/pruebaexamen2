<?php

namespace App\Http\Livewire\Users;

use App\Models\usuarios;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Crearusuario extends Component
{

    use WithFileUploads;
    public usuarios $user2;
    public $foto;



    public function mount(){
        $this->user2 = new usuarios();
    }

    public function render()
    {
        return view('livewire.users.crearusuario');
    }


    public function crear2(){

        $this->validate();
        if($this->foto != null){
        $this->user2->foto = Storage::disk('public')->put ('images/user',$this->foto);
         }
        $this->user2->save();
        return redirect(route('usuarios'));
    }

    protected function rules(){
        return[
            'foto'=>'nullable|image',
            'usuarios.nombre_usuario'=>'required|string',
            'usuarios.email'=>'string|required',
            'usuarios.password'=>'required'

        ];
    }


}
