<x-dashboard.layout title="Edición de producto / Dashboard">
    <div class="relative md:ml-64 bg-blueGray-50">
        <x-dashboard.user-navbar />
        <x-alert />
        <x-dashboard.cards />

        <div class="px-4 md:px-10 mx-auto w-full -m-24">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-8/12 px-4">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                        <div class="rounded-t bg-white mb-0 px-6 py-6">
                            <div class="text-center flex justify-between">
                                <h6 class="text-blueGray-700 text-xl font-bold">
                                    Edición del producto "{{ $product->name }}"
                                </h6>

                                <a href="{{ url()->previous() }}" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                    Cancelar
                                </a>
                            </div>
                        </div>

                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <form action="{{ route('dashboard.products.update', $product->slug) }}" method="post">
                                @csrf
                                @method('PUT')

                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Información general
                                </h6>

                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlFor="grid-password">
                                                Nombre
                                            </label>

                                            <input
                                                type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="{{ $product->name }}"
                                                name="name"
                                                required
                                            />
                                        </div>
                                    </div>

                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlFor="grid-password">
                                                Precio
                                            </label>

                                            <input
                                                type="number"
                                                min="0"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="{{ $product->price }}"
                                                name="price"
                                                required
                                            />
                                        </div>
                                    </div>

                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlFor="grid-password">
                                                Cantidad
                                            </label>

                                            <input
                                                type="number"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="{{ $product->stock }}"
                                                name="stock"
                                            />
                                        </div>
                                    </div>

                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlFor="grid-password">
                                                Imagenes
                                            </label>

                                            <button class="border-0 px-3 py-3 text-white text-sm bg-indigo-600 rounded shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                Gestion de imagenes
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-6 mb-6 border-b-1 border-blueGray-300" />

                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlFor="grid-password">
                                                Descripción
                                            </label>

                                            <textarea
                                                type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                rows="4"
                                                name="description"
                                            >{{ $product->description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <button type="submit" class="px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <x-dashboard.footer />
        </div>
    </div>
</x-dashboard.layout>
