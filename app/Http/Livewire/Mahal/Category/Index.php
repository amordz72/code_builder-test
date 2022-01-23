<?php

namespace App\Http\Livewire\Mahal\Category;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
               //Index Render method
               return view('livewire.mahal.category.index', ['title' => 'All Category'])
             ;
    }
}
