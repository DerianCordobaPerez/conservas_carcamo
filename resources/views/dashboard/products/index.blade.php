<x-dashboard.layout title="Productos / Dashboard">
    <x-slot:js>
        <script>
            const modalOpen = document.querySelectorAll('.modal-open')

            modalOpen.forEach(item => item.addEventListener('click',
                function(event) {
                    event.preventDefault()
                    toggleModal()
                })
            )

            document.querySelector('.modal-overlay').addEventListener('click', toggleModal)

            const closeModal = document.querySelectorAll('.modal-close')
            closeModal.forEach(item => item.addEventListener('click', toggleModal))

            document.onkeydown = function(evt) {
                evt = evt || window.event

                const isEscape = "key" in evt
                    ? (evt.key === "Escape" || evt.key === "Esc")
                    : (evt.keyCode === 27)

                if (isEscape && document.body.classList.contains('modal-active')) {
                    toggleModal()
                }
            };

            function toggleModal () {
                const body = document.querySelector('body')
                const modal = document.querySelector('.modal')
                modal.classList.toggle('opacity-0')
                modal.classList.toggle('pointer-events-none')
                body.classList.toggle('modal-active')
            }
        </script>
    </x-slot>

    <div class="relative md:ml-64 bg-blueGray-50">
        <x-dashboard.user-navbar />
        <x-alert />
        <x-dashboard.cards />

        <div class="px-4 md:px-10 mx-auto w-full -m-24">
            <livewire:products-table />
            <x-dashboard.product-modal />
            <x-dashboard.footer />
        </div>
    </div>
</x-dashboard.layout>
