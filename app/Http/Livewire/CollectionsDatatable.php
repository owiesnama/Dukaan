<?php

namespace App\Http\Livewire;

use App\Collection;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class CollectionsDatatable extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $query = '';


    public function render()
    {
        $collectionBuilder = $this->query ? Collection::search($this->query) : Collection::query();

        return view('livewire.collections-datatable')
            ->with('collections', $collectionBuilder->paginate($this->perPage));
    }
}
