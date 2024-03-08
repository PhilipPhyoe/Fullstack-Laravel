<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Categories extends Component
{
    #[Computed()]
    public function Categories()
    {
        return Category::all();
    }

    public function render()
    {
        return view('livewire.categories');
    }
}
