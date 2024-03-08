<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Producut extends Component
{
    #[Computed()]

    public function show(Product $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }

    public function render()
    {
        return view('livewire.producut');
    }
}
