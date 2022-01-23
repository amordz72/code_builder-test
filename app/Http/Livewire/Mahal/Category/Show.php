<?php

namespace App\Http\Livewire\Mahal\Category;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
                //Show Render method
                return view('livewire.mahal.category.show', ['title' => 'Show Category'])
                ->extends('layouts.app');
    }
}
