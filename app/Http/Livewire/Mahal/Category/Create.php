<?php

namespace App\Http\Livewire\Mahal\Category;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
                               //Create Render method
                               return view('livewire.mahal.category.create', ['title' => 'Create Category'])
                               ->extends('layouts.app');
    }
}
