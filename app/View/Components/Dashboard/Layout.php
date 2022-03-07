<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public string $title, $body;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $body = 'text-blueGray-700 antialiased')
    {
        $this->title = $title;
        $this->body = $body;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.dashboard.layout');
    }
}
