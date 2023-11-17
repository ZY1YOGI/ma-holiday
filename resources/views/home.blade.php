<x-layout title="Home" description="Home description" keywords="Home keywords">
    @include('partials.header')









    <div x-data="{ slide: false }">


    </div>


    <script>
        Alpine.data('slide', () => ({
            id: 0,

            next(id) {
                this.id = id
            }
        }))
    </script>











    @include('partials.footer')
</x-layout>
