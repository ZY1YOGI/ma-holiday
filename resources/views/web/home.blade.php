<x-layout title="Home" description="Home description" keywords="Home keywords">
    @include('web.partials.header')




    <main class="container">
        <!--section-Hero-->
        <section class="relative">
            <div id="slide-trips">
                <div class="swiper-wrapper">
                    @foreach ($trips as $trip)
                        <div class="relative pt-10 pb-16 md:py-16 lg:pb-28 lg:pt-24 swiper-slide">
                            <div class="relative flex flex-col-reverse justify-end md:flex-row">
                                <div class="z-10 w-full px-3 -mt-6 md:absolute md:left-0 md:top-1/2 md:transform md:-translate-y-1/2 md:mt-12 sm:px-6 md:px-0 md:w-3/5 lg:w-1/2 xl:w-2/5">
                                    <div class="p-4 space-y-3 bg-white shadow-lg sm:p-8 xl:py-14 md:px-10 bg-opacity-40 backdrop-filter backdrop-blur-lg rounded-3xl sm:space-y-5">
                                        <div class="flex flex-wrap space-x-2">
                                            <h3 class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-blue-800 bg-blue-100 hover:bg-blue-800">Ma-Holiday</h3>
                                            @foreach (explode(',', $trip->seo_keywords) as $keyword)
                                                <h3 role="tag" class="transition-colors hover:text-white duration-300 px-2.5 py-1 rounded-full font-medium text-xs relative text-blue-800 bg-blue-100 hover:bg-blue-800">{{ $keyword }}</h3>
                                            @endforeach
                                        </div>
                                        <a class="block font-serif font-bold text-gray-800 underline underline-offset-4" title="category" href="{{ route('category', $trip->category->slug) }}">{{ $trip->category->name }}</a>
                                        <h2 class="text-2xl font-semibold md:text-3xl line-clamp-1">
                                            {{ $trip->title }}
                                        </h2>
                                        <p class="mt-2 text-sm font-normal md:mt-3 sm:text-base text-neutral-500 dark:text-neutral-400 line-clamp-4">
                                            {{ fake()->text(300) }}
                                        </p>
                                        <div class="flex justify-between pt-5">
                                            <dl class="flex items-center mt-1 text-xs text-neutral-500 dark:text-neutral-400">
                                                <dt class="sr-only">Date</dt>
                                                <dd class="font-normal text-neutral-500 dark:text-neutral-400">
                                                    <time datetime="{{ $trip->created_at }}">{{ $trip->created_at->format('M d Y') }}</time>
                                                </dd>
                                            </dl>
                                            <a class="block px-5 py-3 transition-all bg-white border-2 border-sky-400 rounded-3xl hover:shadow-xl hover:bg-opacity-50" href="{{ route('trip', $trip->slug) }}">Show More..</a>
                                        </div>
                                    </div>
                                    <div class="p-4 sm:pt-8 sm:px-10">
                                        <div class="relative flex items-center text-neutral-900 dark:text-neutral-300">
                                            <button class="slide-trip-next w-11 h-11 text-xl mr-[6px] bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 rounded-full flex items-center justify-center hover:border-neutral-300 focus:outline-none" title="Next">
                                                < </button>
                                                    <button class="flex items-center justify-center text-xl bg-white border rounded-full slide-trip-prev w-11 h-11 dark:bg-neutral-900 border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 hover:border-neutral-300 focus:outline-none" title="Prev">
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

        <!--section-Partners-->
        <section class="py-16">
            <div class="relative flex flex-col justify-between mb-10 sm:flex-row sm:items-end md:mb-12 text-neutral-900 dark:text-neutral-50">
                <div class="max-w-2xl">
                    <h2 class="text-2xl font-semibold md:text-3xl lg:text-4xl">
                        Trip partners
                    </h2>
                    <span class="block mt-2 text-base font-normal md:mt-3 sm:text-xl text-neutral-500 dark:text-neutral-400">
                        Travel partners with us step by step
                    </span>
                </div>
            </div>
            <div class="relative flow-root">
                <div id="slide-partners" class="flow-root overflow-hidden rounded-xl">
                    <ul class="relative -mx-2 swiper-wrapper whitespace-nowrap xl:-mx-4 ">
                        <li class="swiper-slide">
                            <a class="flex flex-col" href="/archive/the-demo-archive-slug">
                                <img src="{{ asset('images/bg/1.jpg') }}" class="object-cover w-full h-full rounded-2xl" alt="taxonomies">
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a class="flex flex-col" href="/archive/the-demo-archive-slug">
                                <img src="{{ asset('images/bg/4.jpg') }}" class="object-cover w-full h-full rounded-2xl" alt="taxonomies">
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a class="flex flex-col" href="/archive/the-demo-archive-slug">
                                <img src="{{ asset('images/bg/2.jpg') }}" class="object-cover w-full h-full rounded-2xl" alt="taxonomies">
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a class="flex flex-col" href="/archive/the-demo-archive-slug">
                                <img src="{{ asset('images/bg/3.jpg') }}" class="object-cover w-full h-full rounded-2xl" alt="taxonomies">
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a class="flex flex-col nc-CardCategory4" href="/archive/the-demo-archive-slug">
                                <img src="{{ asset('images/bg/4.jpg') }}" class="object-cover w-full h-full rounded-2xl" alt="taxonomies">
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="absolute z-50 inline-flex items-center justify-center text-lg -translate-y-1/2 bg-white border rounded-full slidesPartners-prev w-9 h-9 xl:w-12 xl:h-12 -left-3 xl:-left-6 top-1/2 dark:bg-neutral-900 border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 hover:border-neutral-300 focus:outline-none">
                    &#8592;
                </button>
                <button class="absolute z-50 inline-flex items-center justify-center text-lg -translate-y-1/2 bg-white border rounded-full slidesPartners-next w-9 h-9 xl:w-12 xl:h-12 -right-3 xl:-right-6 top-1/2 dark:bg-neutral-900 border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 hover:border-neutral-300 focus:outline-none">
                    &#8592;
                </button>
            </div>
        </section>
        <!--End section-Partners-->




        <section class="container my-20">
            <header class="space-y-3 text-center">
                <h1 class="text-2xl font-medium text-blue-800">GALLERYS</h1>
                <p class="text-4xl font-semibold">PHOTOS FROM TRIPS</p>
            </header>
            <div class="b-t flex">
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
        </section>



        <section class="container my-20">
            <header class="space-y-3 text-center">
                <h1 class="text-2xl font-medium text-blue-800">JOIN THOUSANDS OF SATISFIED CUSTOMERS</h1>
                <p class="text-4xl font-semibold">OPINIONS ABOUT TRIPS</p>
            </header>
            <div id="slide-customers" class="overflow-hidden">
                <div class="swiper-wrapper my-12">
                    @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $customer)
                        <div class="px-12 py-12 bg-white rounded-lg shadow-xl swiper-slide">
                            <h1 class="text-lg">{{ fake()->name() }}</h1>
                            <p class="text-gray-500 pt-3 px-2.5">{{ fake()->text(45) }}</p>
                        </div>
                    @endforeach
                </div>
            </div>


        </section>


    </main>


    <div class="fixed bottom-5 bg-white rounded-full p-8 right-5">

    </div>




    @include('web.partials.footer')'
as
