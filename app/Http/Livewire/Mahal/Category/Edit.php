<?php

namespace App\Http\Livewire\Mahal\Category;

use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
             //Edit Render method
             return view('livewire.mahal.category.edit', ['title' => 'Edit Category'])
             ->extends('layouts.app');

    }
}
