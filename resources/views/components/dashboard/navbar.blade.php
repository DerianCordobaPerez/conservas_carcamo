<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>

        <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('dashboard.home') }}">
            Conservas Carcamo
        </a>

        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
                <a class="text-blueGray-500 block py-1 px-3" href="#notification-dropdown" onclick="openDropdown(event,'notification-dropdown')">
                    <i class="fas fa-bell"></i>
                </a>

                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"id="notification-dropdown">
                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                        Action
                    </a>

                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                        Another action
                    </a>

                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                        Something else here
                    </a>

                    <div class="h-0 my-2 border border-solid border-blueGray-100"></div>

                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                        Seprated link
                    </a>
                </div>
            </li>

            <li class="inline-block relative">
                <a class="text-blueGray-500 block" href="#" onclick="openDropdown(event,'user-responsive-dropdown')">
                    <div class="items-center flex">
                        <span class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                            <img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="{{ asset('img/team-1-800x800.jpg') }}"/>
                          </span>
                    </div>
                </a>

                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="user-responsive-dropdown">
                    <a href="#user-responsive-dropdown" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                        Action
                    </a>

                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                        Another action
                    </a>

                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                        Something else here
                    </a>

                    <div class="h-0 my-2 border border-solid border-blueGray-100"></div>

                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                        Seprated link
                    </a>
                </div>
            </li>
        </ul>

        <x-dashboard.sidebar/>
    </div>
</nav>
