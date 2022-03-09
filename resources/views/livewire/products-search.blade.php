<div>
    <input
        wire:model="search"
        type="text"
        placeholder="Buscar producto"
        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10"
    >

    @if(strlen($search) > 0)
        <ul class="absolute bg-gray-50 w-full p-3 mt-2 shadow-lg rounded">
            @forelse($products as $product)
                <li>{{ $product->name }}</li>
            @empty
                <li>
                    <i class="fas fa-exclamation-circle text-gray-600"></i>
                    No hay resultados
                </li>
            @endforelse
        </ul>
    @endif
</div>
