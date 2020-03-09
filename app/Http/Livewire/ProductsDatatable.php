<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsDatatable extends Component
{
    use WithPagination;
    protected $updatesQueryString = ['query'];
    public $query = '';
    public $perPage = '';

    public function render()
    {
        $productsBuilder = $this->query ? Product::search($this->query) : Product::query();
        return view('livewire.products-datatable')
            ->with('products', $productsBuilder->paginate($this->perPage));
    }
}
