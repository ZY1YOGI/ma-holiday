<x-layout title="Galleries" description="Galleries description" keywords="Galleries keywords">
    @include('web.partials.header')


    <main class="container">

        <header class="my-12 text-center">
            <h1 class="text-3xl font-bold text-sky-900 md:text-5xl dark:text-white ">Ma Holiday Galleries</h1>
            <p class="px-px pt-3 text-xl text-sky-950 dark:text-sky-600">This is where photo art comes together</p>
        </header>


        <section class="mb-12 overflow-hidden max-md:px-1" x-data="{ image: null }">
            <header class="space-y-3 text-center">
                <h1 class="text-2xl font-medium text-blue-900 uppercase dark:text-sky-800">All Photos from Gallery</h1>
            </header>
            <div class="flex items-center justify-center fixed inset-0 backdrop-filter backdrop-blur-[5px] z-50" x-on:click="image=null" x-show="image" x-transition style="display: none">
                <div class="w-4/5 md:w-1/2 md:h-3/5 h-2/5">
                    <img :src="image" alt="scale image" class="z-50 object-contain shadow-lg size-full rounded-xl" />
                </div>
            </div>
            <ul class="p-16 flex flex-wrap md:gap-2.5 gap-1 overflow-y-auto justify-center h-full max-h-screen">
                @foreach ($images as $image)
                    <li class="swiper-slide rounded-xl md:size-32 sm:size-20 size-16 cursor-pointer hover:scale-[1.8] transition-all hover:z-10" x-on:click="image=$el.children[0].src">
                        <x-image :src="$image->getUrl()" :alt="$image->name" width="100" height="100" class="object-cover object-center w-full h-full rounded-lg shadow shadow-blue-300" loading="lazy" />
                    </li>
                @endforeach
            </ul>
        </section>


        <section class="relative mt-32 overflow-hidden border-t-8 max-md:px-3 border_gradient" id="slide-gallery">
            <header class="py-6 space-y-3 text-center">
                <h1 class="text-3xl font-bold md:text-5xl text-sky-950 dark:text-sky-500">Galleries</h1>
                <p class="text-xl md:text-2xl text-sky-900/80 dark:text-sky-600">Large collections of photographical images of our Trips.</p>
            </header>
            <ul class="my-6 swiper-wrapper">
                @foreach ($galleries as $gallery)
                    <li class="swiper-slide rounded-xl">
                        <div class="flex flex-wrap mb-3 space-x-2">
                            <h3 class="transition hover:text-white duration-300 relative px-2.5 py-1 rounded-full font-medium text-xs text-blue-800 bg-blue-100 hover:bg-blue-800">Ma-Holiday</h3>
                            <h3 class="transition hover:text-white duration-300 relative px-2.5 py-1 rounded-full font-medium text-xs text-blue-800 bg-blue-100 hover:bg-blue-800">Gallery</h3>
                            @foreach ($gallery->getSeoKeywords() as $keyword)
                                <h3 role="tag" class="transition-colors hover:text-white duration-300 px-2.5 py-1 rounded-full font-medium text-xs relative text-blue-800 bg-blue-100 hover:bg-blue-800">{{ $keyword }}</h3>
                            @endforeach
                        </div>
                        <div class="relative z-0 w-full group aspect-w-16 aspect-h-16 sm:aspect-h-12">
                            <div class="grid w-full h-full grid-cols-3 gap-1">
                                <div class="grid grid-rows-2 gap-0.5">
                                    <x-image :src="$gallery->getMedia('gallery')[0]->original_url ?? 'default-placeholder.png'" class="object-cover object-center rounded-lg shadow size-full" :alt="$gallery->getMedia('gallery')[0]->name ?? $gallery->name" loading="lazy" />
                                    <x-image :src="$gallery->getMedia('gallery')[1]->original_url ?? 'default-placeholder.png'" class="object-cover object-center rounded-lg size-full" :alt="$gallery->getMedia('gallery')[1]->name ?? $gallery->name" loading="lazy" />
                                </div>
                                <div>
                                    <x-image :src="$gallery->getMedia('gallery')[2]->original_url ?? 'default-placeholder.png'" class="object-cover object-center shadow size-full rounded-2xl shadow-blue-500" :alt="$gallery->getMedia('gallery')[2]->name ?? $gallery->name" loading="lazy" />
                                </div>
                                <div class="grid grid-rows-2 gap-0.5">
                                    <x-image :src="$gallery->getMedia('gallery')[3]->original_url ?? 'default-placeholder.png'" class="object-cover object-center rounded-lg size-full" :alt="$gallery->getMedia('gallery')[3]->name ?? $gallery->name" loading="lazy" />
                                    <x-image :src="$gallery->getMedia('gallery')[4]->original_url ?? 'default-placeholder.png'" class="object-cover object-center rounded-lg shadow size-full" :alt="$gallery->getMedia('gallery')[4]->name ?? $gallery->name" loading="lazy" />
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
            <button id="slide-gallery-prev" class="absolute z-50 text-xl bg-white rounded-full top-1/2 -left-3 size-11 dark:bg-neutral-900" title="Prev">
                < </button>
                    <button id="slide-gallery-next" class="absolute z-50 text-xl bg-white rounded-full top-1/2 -right-3 size-11 dark:bg-neutral-900" title="Next">
                        >
                    </button>
        </section>


        <section class="relative py-10 px-2.5 overflow-hidden">
            <header class="space-y-3 text-center">
                <h1 class="text-3xl font-semibold text-blue-800 dark:text-sky-50">Category Trips</h1>
                <p class="px-1 text-xl font-semibold text-sky-900/80 dark:text-white/50">We have many sections for different Trips</p>
            </header>
            <div class="flex flex-wrap max-w-5xl gap-5 pt-12 mx-auto">
                @foreach ($categories as $cateogry)
                    <a class="px-6 py-3 bg-white rounded-3xl text-sky-950" href="{{ route('category', $cateogry->slug) }}">{{ $cateogry->name }}</a>
                @endforeach
            </div>
            <div class="max-w-4xl mx-auto my-3 border-2 border_gradient rounded-3xl max-md:mx-3"></div>
        </section>
    </main>
    @include('web.partials.footer')
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
</x-layout>
