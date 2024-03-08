<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{

    #[Computed()]
    public function Products()
    {
        return Product::all();
    }

    public function render()
    {
        return view('livewire.products');
    }
}
