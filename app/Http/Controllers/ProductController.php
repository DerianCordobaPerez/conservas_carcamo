<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ImageService;
use App\Services\ViewService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    use ViewService, ImageService;

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|RedirectResponse
     */
    public function index(): Application|Factory|View|RedirectResponse
    {
        return $this->render(
            view: 'dashboard.products.index',
//            roles: ['admin']
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        return $this->authorized(['admin'], function() use($request) {
            $slug = $request->input('name').'-'.uniqid();

            $images = $this->getImageKeys($request->file('images'), $slug);
            $this->saveImages('img/products');

            $product = Product::create(array_merge(
                $request->except('_token', 'images'),
                ['slug' => $slug, 'images' => $images]
            ));

            session()->flash('success', 'Producto creado correctamente');
            return redirect()->route('dashboard.products.index');
        });
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Factory|View|Application|RedirectResponse
     */
    public function edit(Product $product): Factory|View|Application|RedirectResponse
    {
        return $this->render(
            view: 'dashboard.products.edit',
            data: ['product' => $product],
//            roles: ['admin']
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return Factory|View|Application|RedirectResponse
     */
    public function update(Request $request, Product $product): Factory|View|Application|RedirectResponse
    {
        return $this->authorized([], function() use($request, $product) {
            $slug = $request->input('name').'-'.uniqid();

            $product->update(array_merge(
                $request->except('_token', 'images'),
                ['slug' => $slug]
            ));

            session()->flash('success', 'Producto actualizado correctamente');
            return route('dashboard.products.index');
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product): RedirectResponse
    {
        return $this->authorized(['admin'], function() use($product) {
            $product->delete();

            return redirect()->route('dashboard.products.index');
        });
    }
}
