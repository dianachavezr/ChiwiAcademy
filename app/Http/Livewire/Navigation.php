<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;


class Navigation extends Component
{
    public function render()
    {
//esta clase me renderiza el contenido que tengamos en livewire.navigation
        $categories = Category::all();
        return view('livewire.navigation', compact('categories'));
    }
}
