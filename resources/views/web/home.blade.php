<x-layout title="Home" description="Home description" keywords="Home keywords">
    @include('web.partials.header')





    <main class="container">
            <!--section-Hero-->
            <section class="relative">
                <div id="slide-trips">
                    <div class="swiper-wrapper">
                        @foreach ([1, 2, 3, 4] as $slide)
                            <div class="relative pt-10 pb-16 md:py-16 lg:pb-28 lg:pt-24 swiper-slide">
                                <div class="relative flex flex-col-reverse justify-end md:flex-row">
                                    <div class="z-10 w-full px-3 -mt-8 md:absolute md:left-0 md:top-1/2 md:transform md:-translate-y-1/2 md:mt-0 sm:px-6 md:px-0 md:w-3/5 lg:w-1/2 xl:w-2/5">
                                        <div class="p-4 sm:p-8 xl:py-14 md:px-10 bg-white bg-opacity-40 backdrop-filter backdrop-blur-lg shadow-lg rounded-3xl space-y-3 sm:space-y-5 !border-opacity-0 -- nc-dark-box-bg">
                                            <div class="flex flex-wrap space-x-2 nc-CategoryBadgeList">
                                                <h3 class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-blue-800 bg-blue-100 hover:bg-blue-800">Ma-Holiday</h3>
                                                <h3 class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-yellow-800 bg-yellow-100 hover:bg-yellow-800">{{ fake()->text(8) }}</h3>
                                            </div>

                                            <h2 class="text-2xl font-semibold md:text-3xl line-clamp-1">
                                                {{ fake()->text(35) }}
                                            </h2>
                                            <p class="mt-2 text-sm font-normal md:mt-3 sm:text-base text-neutral-500 dark:text-neutral-400 line-clamp-4">
                                                {{ fake()->text(300) }}
                                            </p>
                                            <dl class="flex items-center mt-1 text-xs text-neutral-500 dark:text-neutral-400">
                                                <dt class="sr-only">Date</dt>
                                                <dd class="font-normal text-neutral-500 dark:text-neutral-400">
                                                    <time datetime="{{ fake()->date() }}">{{ fake()->dateTime()->format('M d Y') }}</time>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="p-4 sm:pt-8 sm:px-10">
                                            <div class="relative flex items-center text-neutral-900 dark:text-neutral-300">
                                                <button class="slide-trip-next w-11 h-11 text-xl mr-[6px] bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 rounded-full flex items-center justify-center hover:border-neutral-300 focus:outline-none" title="Next">
                                                    <
                                                </button>
                                                <button class="flex items-center justify-center text-xl bg-white border rounded-full slide-trip-prev w-11 h-11 dark:bg-neutral-900 border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 hover:border-neutral-300 focus:outline-none" title="Prev">
                                                    >
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-4/5 lg:w-2/3">
                                        <a href="#single/this-is-single-slug">
                                            <div class="relative nc-NcImage aspect-w-16 aspect-h-12 sm:aspect-h-9 md:aspect-h-14 lg:aspect-h-10 2xl:aspect-h-9">
                                                <img src="{{ fake()->imageUrl() }}" class="absolute inset-0 object-cover rounded-3xl" alt="" />
                                            </div>
                                        </a>
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
                <div class="relative flex flex-col justify-between mb-10 nc-Section-Heading sm:flex-row sm:items-end md:mb-12 text-neutral-900 dark:text-neutral-50">
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
                                <a class="flex flex-col nc-CardCategory4" href="/archive/the-demo-archive-slug">
                                    <img src="{{ fake()->imageUrl() }}" class="object-cover w-full h-full rounded-2xl" alt="taxonomies">
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a class="flex flex-col nc-CardCategory4" href="/archive/the-demo-archive-slug">
                                    <img src="{{ fake()->imageUrl() }}" class="object-cover w-full h-full rounded-2xl" alt="taxonomies">
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a class="flex flex-col nc-CardCategory4" href="/archive/the-demo-archive-slug">
                                    <img src="{{ fake()->imageUrl() }}" class="object-cover w-full h-full rounded-2xl" alt="taxonomies">
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a class="flex flex-col nc-CardCategory4" href="/archive/the-demo-archive-slug">
                                    <img src="{{ fake()->imageUrl() }}" class="object-cover w-full h-full rounded-2xl" alt="taxonomies">
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a class="flex flex-col nc-CardCategory4" href="/archive/the-demo-archive-slug">
                                    <img src="{{ fake()->imageUrl() }}" class="object-cover w-full h-full rounded-2xl" alt="taxonomies">
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
                <div class="b-t">

                </div>
            </section>



            <section class="container my-20" id="slide-customers">
                <header class="space-y-3 text-center">
                    <h1 class="text-2xl font-medium text-blue-800">JOIN THOUSANDS OF SATISFIED CUSTOMERS</h1>
                    <p class="text-4xl font-semibold">OPINIONS ABOUT TRIPS</p>
                </header>

                <div class="swiper-wrapper">

                    @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $slide)
                        <div class="w-12 h-8 b-t swiper-slide">
                            <h1>{{ fake()->name() }}</h1>
                            <p>{{ fake()->text(35) }}</p>
                        </div>
                    @endforeach

                </div>


            </section>


    </main>






    @include('web.partials.footer')
</x-layout>
