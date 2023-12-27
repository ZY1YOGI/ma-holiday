<x-layout title="Home" description="Home description" keywords="Home keywords">
    @include('web.partials.header')




    <main class="container">
        <!--section-Hero-->
        <section class="relative max-md:px-2.5">
            <div id="slide-hero">
                <div class="swiper-wrapper">
                    @foreach ($trips as $trip)
                        <div class="relative pt-10 pb-16 md:py-16 lg:pb-28 lg:pt-24 swiper-slide">
                            <div class="relative flex flex-col-reverse justify-end md:flex-row">
                                <div class="z-10 w-full px-3 -mt-6 md:absolute md:left-0 md:top-1/2 md:transform md:-translate-y-1/2 md:mt-12 sm:px-6 md:px-0 md:w-3/5 lg:w-1/2 xl:w-2/5">
                                    <div class="p-4 space-y-3 bg-white dark:bg-slate-600 shadow-lg sm:p-8 xl:py-14 md:px-10 bg-opacity-40 backdrop-filter backdrop-blur-lg rounded-3xl sm:space-y-5">
                                        <div class="flex flex-wrap space-x-2">
                                            <h3 class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-blue-800 bg-blue-100 hover:bg-blue-800">Ma-Holiday</h3>
                                            @foreach (explode(',', $trip->seo_keywords) as $keyword)
                                                <h3 role="tag" class="transition-colors hover:text-white duration-300 px-2.5 py-1 rounded-full font-medium text-xs relative text-blue-800 bg-blue-100 hover:bg-blue-800">{{ $keyword }}</h3>
                                            @endforeach
                                        </div>
                                        <a class="block font-serif font-bold text-gray-800 underline underline-offset-4 dark:text-gray-100" title="category" href="{{ route('category', $trip->category->slug) }}">{{ $trip->category->name }}</a>
                                        <h2 class="text-2xl font-semibold md:text-3xl line-clamp-1">
                                            {{ $trip->title }}
                                        </h2>
                                        <p class="mt-2 text-sm font-normal md:mt-3 sm:text-base text-slate-500 dark:text-slate-100 line-clamp-4">
                                            {{ fake()->text(300) }}
                                        </p>
                                        <div class="flex justify-between pt-5">
                                            <dl class="flex items-center mt-1 text-xs text-neutral-500 dark:text-neutral-400">
                                                <dt class="sr-only">Date</dt>
                                                <dd class="font-normal text-slate-500 dark:text-slate-200">
                                                    <time datetime="{{ $trip->created_at }}">{{ $trip->created_at->format('M d Y') }}</time>
                                                </dd>
                                            </dl>
                                            <a class="block px-5 py-3 transition-all bg-white border-2 border-sky-400 rounded-3xl hover:shadow-xl hover:bg-opacity-50 dark:bg-slate-600" href="{{ route('trip', $trip->slug) }}">Show More..</a>
                                        </div>
                                    </div>
                                    <div class="p-4 sm:pt-8 sm:px-10">
                                        <div class="relative flex items-center text-neutral-900 dark:text-neutral-300">
                                            <button class="slide-trip-prev w-11 h-11 text-xl mr-[6px] bg-white dark:bg-slate-800 border border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 rounded-full flex items-center justify-center hover:border-neutral-300 focus:outline-none" title="Prev">
                                                < </button>
                                                    <button class="slide-trip-next flex items-center justify-center text-xl bg-white border rounded-full w-11 h-11 dark:bg-slate-800 border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 hover:border-neutral-300 focus:outline-none" title="Next">
                                                        >
                                                    </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-4/5 lg:w-2/3">
                                    <div class="relative z-0 block w-full overflow-hidden group aspect-w-16 aspect-h-16 sm:aspect-h-9">
                                        <div class="w-full h-full grid grid-cols-3 gap-0.5">
                                            <div class="grid">
                                                <x-image :src="$trip->getMedia('trip')[0]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-2xl" :alt="$trip->title" />
                                            </div>
                                            <div class="grid grid-rows-2 gap-0.5">
                                                <x-image :src="$trip->getMedia('trip')[1]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded" :alt="$trip->title" />
                                                <x-image :src="$trip->getMedia('trip')[2]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded" :alt="$trip->title" />
                                            </div>
                                            <div class="grid">
                                                <x-image :src="$trip->getMedia('trip')[3]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-2xl" :alt="$trip->title" />
                                            </div>
                                        </div>
                                        <a class="absolute inset-0 block transition-opacity opacity-0 bg-white/20 group-hover:opacity-100" href="{{ route('trip', $trip->slug) }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--End section-Hero-->




        <section class="relative py-10 px-2.5 overflow-hidden">
            <header class="space-y-3 text-center">
                <h1 class="text-3xl font-semibold text-blue-800 dark:text-sky-50">Trips Category</h1>
                <p class="text-xl font-semibold text-sky-900/80 px-1 dark:text-white/50">Many Trips for you can chooses the right trip from the ground</p>
            </header>
            <div class="pt-12 flex max-w-5xl mx-auto flex-wrap gap-5">
                @foreach ($categories as $cateogry)
                    <a class="px-6 py-3 rounded-3xl bg-white text-sky-950" href="{{ route('category', $cateogry->slug) }}">{{ $cateogry->name }}</a>
                @endforeach
            </div>
            <div class="border_gradient border-t-4 rounded-3xl my-5 max-w-4xl mx-auto max-md:mx-3"></div>
            <div id="slide-trips" class="bg-blue-500/5 rounded-full shadow-lg shadow-white dark:shadow-blue-500 dark:shadow-md">
                <div class="py-12 swiper-wrapper">
                    @foreach ($trips as $trip)
                        <div class="swiper-slide bg-body-light py-3 rounded-xl border border-blue-300 shadow shadow-blue-500 dark:bg-body-dark dark:border-blue-950">
                            <div class="flex flex-wrap space-x-2 px-2.5 pb-2.5">
                                <h3 role="tag" class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-blue-900 bg-white hover:bg-blue-800">{{ $trip->category->name }}</h3>
                                <h3 role="tag" class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-blue-900 bg-blue-200 hover:bg-blue-800">Ma-Holiday</h3>
                                @foreach (explode(',', $trip->seo_keywords) as $keyword)
                                    <h3 role="tag" class="transition-colors hover:text-white duration-300 px-2.5 py-1 rounded-full font-medium text-xs relative text-blue-900 bg-blue-200 hover:bg-blue-800">{{ $keyword }}</h3>
                                @endforeach
                            </div>
                            <div class="group relative w-full z-0 aspect-w-16 aspect-h-16 sm:aspect-h-12">
                                <div class="w-full h-full grid grid-cols-3 gap-1">
                                    <div class="grid grid-rows-2 gap-0.5 overflow-hidden">
                                        <x-image :src="$trip->getMedia('trip')[0]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-ee-xl shadow" :alt="$trip->title" />
                                        <x-image :src="$trip->getMedia('trip')[1]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-se-xl" :alt="$trip->title" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <x-image :src="$trip->getMedia('trip')[2]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded shadow shadow-blue-500" :alt="$trip->title" />
                                    </div>
                                    <div class="grid grid-rows-2 gap-0.5 overflow-hidden">
                                        <x-image :src="$trip->getMedia('trip')[3]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-es-xl" :alt="$trip->title" />
                                        <x-image :src="$trip->getMedia('trip')[4]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-ss-xl shadow" :alt="$trip->title" />
                                    </div>
                                </div>
                                <a class="absolute inset-0 block transition-opacity opacity-0 bg-white/10 group-hover:opacity-100" href="{{ route('trip', $trip->slug) }}"></a>
                            </div>
                            <div class="mt-2.5 flex justify-between px-3">
                                <a class="block font-bold text-gray-800 underline underline-offset-4 hover:underline-offset-8 transition-all dark:text-gray-100" title="category" href="{{ route('category', $trip->category->slug) }}">{{ $trip->category->name }}</a>
                                <dl class="flex items-center mt-1 text-xs text-neutral-500 dark:text-neutral-400">
                                    <dt class="sr-only">Date</dt>
                                    <dd class="font-normal text-neutral-500 dark:text-neutral-300">
                                        <time datetime="{{ $trip->created_at }}">{{ $trip->created_at->format('M d Y') }}</time>
                                    </dd>
                                </dl>
                            </div>
                            <div class="p-2.5">
                                <h1 class="text-2xl pt-3 px-1 line-clamp-1 font-medium">{{ $trip->title }}</h1>
                                <p class="text-gray-700 px-3.5 pt-1 line-clamp-4 text-sm dark:text-gray-300">{{ $trip->description }}</p>
                            </div>
                            <a class="px-5 m-3 inline-block py-3 transition-all bg-white border-2 border-sky-400 rounded-3xl hover:shadow-xl hover:bg-opacity-50 dark:bg-slate-800 dark:text-white" href="{{ route('trip', $trip->slug) }}">Show More..</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>



        <section class="container my-20 max-md:px-3">
            <header class="space-y-3 text-center">
                <h1 class="md:text-2xl text-blue-800 dark:text-white uppercase text-xl font-bold">Galleries</h1>
                <p class="md:text-4xl font-semibold text-sky-950 dark:text-sky-500 text-2xl">Photos from trips</p>
            </header>
            <div class="my-10 overflow-hidden max-md:px-1" x-data="{ image: null }">
                <div class="flex items-center justify-center fixed inset-0 backdrop-filter backdrop-blur-[5px] z-50" x-on:click="image=null" x-show="image" x-transition style="display: none">
                    <div class="md:w-1/2 md:h-3/5 h-2/5 w-4/5">
                        <img :src="image" alt="scale image" class="size-full object-contain rounded-xl shadow-lg z-50" />
                    </div>
                </div>
                <ul class="mt-3 flex flex-wrap md:gap-2.5 gap-1 justify-center">
                    @foreach ($images as $image)
                        <li class="swiper-slide rounded-xl md:size-32 sm:size-20 size-16 cursor-pointer hover:scale-[1.8] transition-all hover:z-10" x-on:click="image=$el.children[0].src">
                            <x-image :src="$image->getUrl()" :alt="$image->name" width="100" height="100" class="object-cover object-center w-full h-full rounded-lg shadow shadow-blue-300" loading="lazy" />
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="overflow-hidden relative" id="slide-gallery">
                <ul class="swiper-wrapper my-6">
                    @foreach ($galleries as $gallery)
                        <li class="swiper-slide rounded-xl">
                            <div class="group relative w-full aspect-w-16 aspect-h-16 sm:aspect-h-9 z-0">
                                <div class="w-full h-full grid grid-cols-3 gap-1">
                                    <div class="grid grid-rows-2 gap-0.5">
                                        <x-image :src="$gallery->getMedia('gallery')[0]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-lg shadow" :alt="$gallery->name" />
                                        <x-image :src="$gallery->getMedia('gallery')[1]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-lg" :alt="$gallery->name" />
                                    </div>
                                    <x-image :src="$gallery->getMedia('gallery')[2]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-2xl shadow shadow-blue-500" :alt="$gallery->name" />
                                    <div class="grid grid-rows-2 gap-0.5">
                                        <x-image :src="$gallery->getMedia('gallery')[3]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-lg" :alt="$gallery->name" />
                                        <x-image :src="$gallery->getMedia('gallery')[4]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-lg shadow" :alt="$gallery->name" />
                                    </div>
                                </div>
                                <a class="absolute inset-0 block transition-opacity opacity-0 bg-white/10 group-hover:opacity-100" href="{{ route('gallery', $gallery->slug) }}"></a>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <button id="slide-gallery-prev" class="absolute top-1/2 -left-3 w-11 h-11 text-xl bg-white dark:bg-neutral-900 rounded-full z-50" title="Prev">
                    < </button>
                        <button id="slide-gallery-next" class="absolute top-1/2 -right-3 w-11 h-11 text-xl bg-white dark:bg-neutral-900 rounded-full z-50" title="Next">
                            >
                        </button>
            </div>
        </section>



        <section class="container my-20 max-md:px-3">
            <header class="space-y-3 text-center">
                <h1 class="text-2xl font-medium text-blue-800 dark:text-blue-50 uppercase">Join thousands of satisfied customers</h1>
                <p class="text-4xl font-semibold text-sky-950 dark:text-sky-500 uppercase">Opinions about trips</p>
            </header>
            <div id="slide-customers" class="overflow-hidden">
                <div class="swiper-wrapper my-12">
                    @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $customer)
                        <div class="customer swiper-slide">
                            <div class="notiglow"></div>
                            <div class="notiborderglow"></div>
                            <div class="notititle">{{ fake()->name() }}</div>
                            <div class="notibody">{{ fake()->text(150) }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>


    <div class="fixed bottom-5 bg-white rounded-full p-3.5 right-5 z-50 shadow cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 max-md:w-8 max-md:h-8" viewBox="0 0 256 256">
            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                <path d="M 45 0 C 20.147 0 0 20.147 0 45 c 0 9.144 2.735 17.645 7.42 24.746 L 0 89.474 l 19.536 -7.375 C 26.778 87.079 35.547 90 45 90 c 24.853 0 45 -20.147 45 -45 C 90 20.147 69.853 0 45 0 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,132,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                <polygon points="17.4,57.49 41.27,32.51 52.83,43.7 72.6,33.62 50.78,57.49 38.47,45.93 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) " />
            </g>
        </svg>
    </div>

    @include('web.partials.footer')
</x-layout>
