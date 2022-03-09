<?php

namespace App\Services;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

trait SecurityService
{
    public function authorized(array|string $roles, Closure $closure): Application|Factory|View|RedirectResponse
    {
        if(count($roles) > 0 && !auth()->user()->can($roles)) {
            session()->flash('danger', 'No estas autorizado para acceder a esta sección');
            return redirect()->route('dashboard.home');
        }

        return $closure();
    }
}
