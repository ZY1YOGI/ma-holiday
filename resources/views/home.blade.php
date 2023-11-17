<x-layout title="Home">
    @include('partials.header')









    <div x-data="{ open: false }">


    </div>


    <script>
        Alpine.data('dropdown', () => ({
            open: false,

            toggle() {
                this.open = !this.open
            }
        }))
    </script>











    @include('partials.footer')
</x-layout>
