<?php

namespace App\Livewire;

use App\Models\products;
use Livewire\WithPagination;
use Livewire\Component;

class ProductList extends Component
{
    use WithPagination;

    public $product = [];
    public $product_id, $name, $description, $price, $quantity;
    public $searchTerm, $add = false, $update = false, $SubmitSearchTerm;

    public function display_add()
    {
        $this->add = true;
    }
    public function store()
    {
        $this->validate([
            'name' => 'required|max:255',
            'description' => '',
            'price' => 'required|numeric|between:150,6000',
            'quantity' => 'required|numeric|between:1,100',
        ]);
        products::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'quantity' => $this->quantity
        ]);
        $this->add = false;
        return redirect()->route('products.index')->with('success', "Product added Successfuly");
    }
    public function display_edit($id)
    {
        $this->product = products::find($id);
        $this->name =  $this->product->name;
        $this->description =  $this->product->description;
        $this->price =  $this->product->price;
        $this->quantity =  $this->product->quantity;

        $this->update = true;
    }
    public function edit($id)
    {
        $data = $this->validate([
            'name' => 'required|max:255',
            'description' => '',
            'price' => 'required|numeric|between:150,6000',
            'quantity' => 'required|numeric|between:1,100',
        ]);
        products::find($id)->update($data);
        $this->update = false;
        return redirect()->route('products.index')->with('success', "Product updated Successfuly");
    }
    public function delete($id, products $product)
    {
        $product->find($id)->delete();
        return redirect()->route('products.index')->with('success', "Product deleted successfully");
    }

    public function render()
    {
        if ($this->searchTerm && $this->SubmitSearchTerm) {
            $products = products::where('name', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('price', 'like', $this->searchTerm)
                ->orWhere('quantity', 'like', $this->searchTerm)
                ->get();
        } else {
            $products = products::latest()->simplePaginate(8);
        }
        return view('livewire.product-list', [
            'products' => $products,
        ]);
    }
}
