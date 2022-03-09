<x-layout :title="$title" :body="$body">
    <!-- Custom css -->
    <x-slot:css>
        @livewireStyles
        @isset($css)
            {{ $css }}
        @endisset
        <link rel="stylesheet" href="{{ asset('css/dashboard/vendor/@fontawesome/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard/app.css') }}">
    </x-slot>

    <!-- Page body -->
    <x-dashboard.navbar />
    {{ $slot }}

    <!-- Custom javascript -->
    <x-slot:js>
        @livewireScripts
        @isset($js)
            {{ $js }}
        @endisset
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
        <script src="{{ mix('js/dashboard/app.js') }}" defer></script>

        <script type="text/javascript" defer>
            /* Sidebar - Side navigation menu on mobile/responsive mode */
            function toggleNavbar(collapseID) {
                document.getElementById(collapseID).classList.toggle("hidden")
                document.getElementById(collapseID).classList.toggle("bg-white")
                document.getElementById(collapseID).classList.toggle("m-2")
                document.getElementById(collapseID).classList.toggle("py-3")
                document.getElementById(collapseID).classList.toggle("px-6")
            }
            /* Function for dropdowns */
            function openDropdown(event, dropdownID) {
                let element = event.target
                while (element.nodeName !== "A") {
                    element = element.parentNode
                }
                Popper.createPopper(element, document.getElementById(dropdownID), {
                    placement: "bottom-start",
                })
                document.getElementById(dropdownID).classList.toggle("hidden")
                document.getElementById(dropdownID).classList.toggle("block")
            }
        </script>

        <script>
            const alert = document.getElementById('alert')

            setTimeout(() => {
                alert?.remove()
            }, 3000)
        </script>
    </x-slot>
</x-layout>
