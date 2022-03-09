<?php

namespace App\Services;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

trait ViewService
{
    use SecurityService;
    /**
     * Check if exist view
     *
     * @param String $view
     * @return bool
     */
    private function exists(string $view): bool
    {
        return view()->exists($view);
    }

    public function render(string $view, array $data = [], array|string $roles = []): Application|Factory|View|RedirectResponse
    {
        abort_unless($this->exists($view), 404);

        return $this->authorized($roles, function () use ($view, $data) {
            return view($view, $data);
        });
    }
}
