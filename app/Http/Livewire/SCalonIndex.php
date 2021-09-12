<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SCalonIndex extends Component
{
    public function render()
    {
        return view('livewire.s-calon-index',[
            'users' => User::all()
        ]);
    }
}
