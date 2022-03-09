<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsTable extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '5'],
    ];

    public string $search = '';
    public string $perPage = '5';

    public function render(): Factory|View|Application
    {
        return view('livewire.products-table', [
            'products' => Product::search('%'.$this->search.'%')->paginate($this->perPage),
        ]);
    }
}
