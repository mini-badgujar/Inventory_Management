<?php

namespace App\Livewire;

use App\Models\products;
use Livewire\WithPagination;
use Livewire\Component;

class ProductList extends Component
{
    use WithPagination;

    public $searchTerm;
    public function delete($id, products $product)
    {
        $product->find($id)->delete();
        return redirect()->route('products.index')->with('success', "Product deleted successfully");
    }


    public function render()
    {
        if ($this->searchTerm) {
            $products = products::where('name', 'like', '%' . $this->searchTerm . '%')->get();
        } else {
            $products = products::latest()->simplePaginate(10);
        }
        return view('livewire.product-list', [
            'products' => $products,
        ]);
    }
}
