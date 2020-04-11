<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class CreateCollectionForm extends Component
{
    public $selectedProducts = [];

    public function render()
    {
        return view('livewire.create-collection-form')
            ->with('products', Product::paginate(5));
    }
}
