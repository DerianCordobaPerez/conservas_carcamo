<nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
    <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
        <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="{{ route('dashboard.home') }}">Dashboard</a>

        <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
            <div class="relative flex w-full flex-wrap items-stretch">
                <span class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                    <i class="fas fa-search"></i>
                </span>

                <livewire:products-search />
            </div>
        </form>

        <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
            <li>
                <a class="text-blueGray-500 block cursor-pointer" onclick="openDropdown(event, 'user-dropdown')">
                    <div class="items-center flex">
                    <span class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                        <img alt="{{ auth()->user()->name }}" class="w-full rounded-full align-middle border-none shadow-lg" src="{{ auth()->user()->profile_photo_url }}">
                    </span>
                    </div>
                </a>
            </li>

            <li>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="user-dropdown">
                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Perfil</a>

                    <div class="h-0 my-2 border border-solid border-blueGray-100"></div>

                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Cerrar Sesión</a>
                </div>
            </li>
        </ul>
    </div>

</nav>


