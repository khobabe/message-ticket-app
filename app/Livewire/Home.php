<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{

    public function handleClick(){
        dump("clicked");
    }

    public function render()
    {
        return view('livewire.home');
    }
}
