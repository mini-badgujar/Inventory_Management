<?php

namespace App\Livewire;

use App\Models\products;
use Livewire\WithPagination;
use Livewire\Component;

class ProductList extends Component
{
    use WithPagination;
    // public $products;
    // public function mount($products)
    // {
    //     $this->products = $products;
    // }

    public function render()
    {
        return view('livewire.product-list', [
            'products' => products::simplePaginate(10),
        ]);
    }
}
