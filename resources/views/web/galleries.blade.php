<x-layout title="Galleries" description="Galleries description" keywords="Galleries keywords">
    @include('web.partials.header')


    <main class="container">

        <header class="my-12 text-center">
            <h1 class="text-3xl font-bold text-sky-900 md:text-5xl dark:text-white ">Ma Holiday Galleries</h1>
            <p class="pt-3 text-xl text-sky-950 dark:text-sky-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur incidunt minima!</p>
        </header>




        <section class="my-20 overflow-hidden max-md:px-3">
            <header class="space-y-3 text-center">
                <h1 class="text-2xl font-medium text-blue-900 uppercase dark:text-sky-800">Rondome Photos</h1>
            </header>
            <ul class="my-6 flex flex-wrap gap-2.5 aspect-8 justify-center">
                @foreach ($images as $image)
                    <li class="swiper-slide rounded-xl md:w-32 md:h-32 w-20 h-20 cursor-pointer md:hover:scale-[2] hover:scale-[1.8] transition-all duration-300 hover:z-10">
                        <x-image :src="$image->original_url" :alt="$image->name" width="100" height="100" class="object-cover object-center w-full h-full rounded-lg shadow shadow-blue-300" loading="lazy" />
                    </li>
                @endforeach
            </ul>
        </section>









        <section class="relative my-20 overflow-hidden max-md:px-3" id="slide-gallery">
            <header class="space-y-3 text-center">
                <h1 class="text-2xl font-medium text-blue-800 uppercase dark:text-white">Galleries</h1>
                <p class="text-4xl font-semibold uppercase text-sky-950 dark:text-sky-500">Photos from trips</p>
            </header>
            <ul class="my-6 swiper-wrapper">
                @foreach ($galleries as $gallery)
                    <li class="swiper-slide rounded-xl">
                        <div class="flex flex-wrap mb-3 space-x-2">
                            <h3 class="transition hover:text-white duration-300 relative px-2.5 py-1 rounded-full font-medium text-xs text-blue-800 bg-blue-100 hover:bg-blue-800">Ma-Holiday</h3>
                            <h3 class="transition hover:text-white duration-300 relative px-2.5 py-1 rounded-full font-medium text-xs text-blue-800 bg-blue-100 hover:bg-blue-800">Gallery</h3>
                            @foreach (explode(',', $gallery->seo_keywords) as $keyword)
                                <h3 role="tag" class="transition-colors hover:text-white duration-300 px-2.5 py-1 rounded-full font-medium text-xs relative text-blue-800 bg-blue-100 hover:bg-blue-800">{{ $keyword }}</h3>
                            @endforeach
                        </div>
                        <div class="relative z-0 w-full group aspect-w-16 aspect-h-16 sm:aspect-h-12">
                            <div class="grid w-full h-full grid-cols-3 gap-1">
                                <div class="grid grid-rows-2 gap-0.5">
                                    <x-image :src="$gallery->getMedia('gallery')[0]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-lg shadow" :alt="$gallery->getMedia('gallery')[0]->name ?? $gallery->name" loading="lazy" />
                                    <x-image :src="$gallery->getMedia('gallery')[1]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-lg" :alt="$gallery->getMedia('gallery')[1]->name ?? $gallery->name" loading="lazy" />
                                </div>
                                <div>
                                    <x-image :src="$gallery->getMedia('gallery')[2]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full shadow rounded-2xl shadow-blue-500" :alt="$gallery->getMedia('gallery')[2]->name ?? $gallery->name" loading="lazy" />
                                </div>
                                <div class="grid grid-rows-2 gap-0.5">
                                    <x-image :src="$gallery->getMedia('gallery')[3]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-lg" :alt="$gallery->getMedia('gallery')[3]->name ?? $gallery->name" loading="lazy" />
                                    <x-image :src="$gallery->getMedia('gallery')[4]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-lg shadow" :alt="$gallery->getMedia('gallery')[4]->name ?? $gallery->name" loading="lazy" />
                                </div>
                            </div>
                            <a class="absolute inset-0 block transition-opacity opacity-0 bg-white/10 group-hover:opacity-100" href="{{ route('gallery', $gallery->slug) }}"></a>
                        </div>
                        <div class="p-3 text-center rounded-b-lg bg-white/50 dark:bg-sky-900/50 backdrop-filter backdrop-blur-3xl">
                            <h1 class="text-xl py-2.5 font-bold text-sky-900 dark:text-sky-50">{{ $gallery->name }}</h1>
                            <p class="line-clamp-2 text-sky-950 dark:text-sky-600">{{ $gallery->description }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
            <button id="slide-gallery-prev" class="absolute z-50 text-xl bg-white rounded-full top-1/2 -left-3 w-11 h-11 dark:bg-neutral-900" title="Prev">
                < </button>
                    <button id="slide-gallery-next" class="absolute z-50 text-xl bg-white rounded-full top-1/2 -right-3 w-11 h-11 dark:bg-neutral-900" title="Next">
                        >
                    </button>
        </section>



        {{-- <section class="relative py-10 px-2.5 overflow-hidden">
            <header class="space-y-3 text-center">
                <h1 class="text-3xl font-semibold text-blue-800 dark:text-sky-50">Trips Category</h1>
                <p class="px-1 text-xl font-semibold text-sky-900/80 dark:text-white/50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam!</p>
            </header>
            <div class="flex flex-wrap max-w-5xl gap-5 pt-12 mx-auto">
                @foreach ($categories as $cateogry)
                    <a class="px-6 py-3 bg-white rounded-3xl text-sky-950" href="{{ route('category', $cateogry->slug) }}">{{ $cateogry->name }}</a>
                @endforeach
            </div>
            <div class="max-w-4xl mx-auto my-3 border-2 border_gradient rounded-3xl max-md:mx-3"></div>
            <div id="slide-trips" class="rounded-full shadow-lg bg-blue-500/5 shadow-white dark:shadow-blue-500 dark:shadow-md">
                <div class="py-12 swiper-wrapper">
                    @foreach ($trips as $trip)
                        <div class="py-3 border border-blue-300 shadow swiper-slide bg-body-light rounded-xl shadow-blue-500 dark:bg-body-dark dark:border-blue-950">
                            <div class="flex flex-wrap space-x-2 px-2.5 pb-2.5">
                                <h3 role="tag" class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-blue-900 bg-white hover:bg-blue-800">{{ $trip->category->name }}</h3>
                                <h3 role="tag" class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-blue-900 bg-blue-200 hover:bg-blue-800">Ma-Holiday</h3>
                                @foreach (explode(',', $trip->seo_keywords) as $keyword)
                                    <h3 role="tag" class="transition-colors hover:text-white duration-300 px-2.5 py-1 rounded-full font-medium text-xs relative text-blue-900 bg-blue-200 hover:bg-blue-800">{{ $keyword }}</h3>
                                @endforeach
                            </div>
                            <div class="relative z-0 w-full group aspect-w-16 aspect-h-16 sm:aspect-h-12">
                                <div class="grid w-full h-full grid-cols-3 gap-1">
                                    <div class="grid grid-rows-2 gap-0.5 overflow-hidden">
                                        <x-image :src="$trip->getMedia('trip')[0]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full shadow rounded-ee-xl" :alt="$trip->title" loading="lazy" />
                                        <x-image :src="$trip->getMedia('trip')[1]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-se-xl" :alt="$trip->title" loading="lazy" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <x-image :src="$trip->getMedia('trip')[2]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded shadow shadow-blue-500" :alt="$trip->title" loading="lazy" />
                                    </div>
                                    <div class="grid grid-rows-2 gap-0.5 overflow-hidden">
                                        <x-image :src="$trip->getMedia('trip')[3]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-es-xl" :alt="$trip->title" loading="lazy" />
                                        <x-image :src="$trip->getMedia('trip')[4]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full shadow rounded-ss-xl" :alt="$trip->title" loading="lazy" />
                                    </div>
                                </div>
                                <a class="absolute inset-0 block transition-opacity opacity-0 bg-white/10 group-hover:opacity-100" href="{{ route('trip', $trip->slug) }}"></a>
                            </div>
                            <div class="mt-2.5 flex justify-between px-3">
                                <a class="block font-bold text-gray-800 underline transition-all underline-offset-4 hover:underline-offset-8 dark:text-gray-100" title="category" href="{{ route('category', $trip->category->slug) }}">{{ $trip->category->name }}</a>
                                <dl class="flex items-center mt-1 text-xs text-neutral-500 dark:text-neutral-400">
                                    <dt class="sr-only">Date</dt>
                                    <dd class="font-normal text-neutral-500 dark:text-neutral-300">
                                        <time datetime="{{ $trip->created_at }}">{{ $trip->created_at->format('M d Y') }}</time>
                                    </dd>
                                </dl>
                            </div>
                            <div class="p-2.5">
                                <h1 class="px-1 pt-3 text-2xl font-medium line-clamp-1">{{ $trip->title }}</h1>
                                <p class="text-gray-700 px-3.5 pt-1 line-clamp-4 text-sm dark:text-gray-300">{{ $trip->description }}</p>
                            </div>
                            <a class="inline-block px-5 py-3 m-3 transition-all bg-white border-2 border-sky-400 rounded-3xl hover:shadow-xl hover:bg-opacity-50 dark:bg-slate-800 dark:text-white" href="{{ route('trip', $trip->slug) }}">Show More..</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section> --}}

    </main>




        <script>
            const swiperGalleries = new Swiper("#slide-galleries", {
                loop: true,
                lazy: true,
                speed: 500,
                slidesPerView: 1,
                spaceBetween: 30,
                // autoplay: {
                //     delay: 2000,
                //     disableOnInteraction: true,
                // },
                navigation: {
                    nextEl: "#slide-gallery-next",
                    prevEl: "#slide-gallery-prev",
                },
            });
        </script>
    @include('web.partials.footer')
</x-layout>
