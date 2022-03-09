<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProductsSearch extends Component
{
    public string $search = '';

    public function render(): Factory|View|Application
    {
        return view('livewire.products-search', [
            'products' => Product::search('%'.$this->search.'%')->get(),
        ]);
    }
}
