<x-layout title="About Us" description="about-us description" keywords="about-us keywords">
    @include('web.partials.header')
    <div class="">

        <section id="features" class="relative block px-6 py-10 border-t border-b border-white md:py-20 md:px-10">
            <div class="relative max-w-5xl mx-auto text-center">
                <span class="flex items-center justify-center my-3 font-medium tracking-wider text-gray-800 uppercase" data-aos="fade-down" data-aos-duration="750">
                    Why choose us
                </span>
                <h2 class="block w-full text-3xl font-bold sm:text-4xl" data-aos="fade-up" data-aos-duration="1200">
                    Excellence is a Title in all our journeys
                </h2>
                <p class="w-full max-w-xl mx-auto my-4 font-medium leading-relaxed tracking-wide text-center text-gray-500 bg-transparent">
                    Trips to Marsa Alam are our most important point. We always strive to be at the top
                    <a href="/" class="font-bold hover:text-indigo-400">~Marsa Alam Holiday~</a>
                </p>
            </div>
            <div class="relative z-10 grid grid-cols-1 gap-10 mx-auto max-w-7xl pt-14 sm:grid-cols-2 lg:grid-cols-3">
                <div class="p-8 text-center border border-white rounded-md shadow">
                    <a class="relative z-50" title="Marsa Alam Holiday" href="{{ route('home') }}">
                        <h1 class="text-lg font-bold text-blue-500 md:text-2xl dark:text-white" data-aos="fade-up" data-aos-duration="500" title="{{ config('app.name') }}">{{ config('app.name') }}</h1>
                    </a>
                    <h3 class="mt-6 text-gray-900">Marsa Alam</h3>
                </div>
                <div class="p-8 text-center border border-white rounded-md shadow">
                    <a class="relative z-50" title="Marsa Alam Holiday" href="{{ route('home') }}">
                        <h1 class="text-lg font-bold text-blue-500 md:text-2xl dark:text-white" data-aos="fade-down" data-aos-duration="750" title="{{ config('app.name') }}">{{ config('app.name') }}</h1>
                    </a>
                    <h3 class="mt-6 text-gray-900">24/7 Customer Support</h3>
                </div>
                <div class="p-8 text-center border border-white rounded-md shadow">
                    <a class="relative z-50" title="Marsa Alam Holiday" href="{{ route('home') }}">
                        <h1 class="text-lg font-bold text-blue-500 md:text-2xl dark:text-white" data-aos="fade-up" data-aos-duration="1000" title="{{ config('app.name') }}">{{ config('app.name') }}</h1>
                    </a>
                    <h3 class="mt-6 text-gray-900">Competitive prices</h3>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 z-0 w-full border-b h-1/3" style="background-image: linear-gradient(to right top, rgba(61, 58, 107, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
            </div>
            <div class="absolute bottom-0 right-0 z-0 w-full h-1/3" style="background-image: linear-gradient(to left top, rgba(38, 50, 220, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
            </div>
        </section>
    </div>
    @include('web.partials.footer')
</x-layout>
