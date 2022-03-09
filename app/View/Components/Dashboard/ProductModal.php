<?php

namespace App\View\Components\Dashboard;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductModal extends Component
{
    public Product $product;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Product $product = null)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.dashboard.product-modal');
    }
}
