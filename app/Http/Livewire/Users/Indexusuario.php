<?php

namespace App\Http\Livewire\Users;

use App\Models\usuarios;
use Livewire\Component;

class Indexusuario extends Component
{

    public function render()
    {
        $usuarios =  usuarios::paginate(20);
        return view('livewire.users.indexusuario',compact('usuarios')) ;
    }
}
