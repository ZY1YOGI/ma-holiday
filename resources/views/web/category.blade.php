<x-layout title="Category - {{ $category->name }}" :description="$category->seo_description" :keywords="$category->seo_keywords">
    @include('web.partials.header')




    <main class="container pt-10 pb-16 space-y-12 lg:pb-28 lg:pt-20">
        <div class="w-full px-2 mx-auto xl:max-w-screen-2xl">
            <div class="relative aspect-w-16 aspect-h-13 sm:aspect-h-9 lg:aspect-h-8 xl:aspect-h-5 rounded-3xl md:rounded-[40px]  shadow-lg drop-shadow-lg overflow-hidden z-0">
                <x-image :src="$category->getFirstMediaUrl('category')" sizes="(max-width: 1280px) 100vw, 1536px" class="object-fill object-center w-full h-full rounded-3xl md:rounded-[40px] blur-[1.5px]" :alt="$category->name" />
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-30">
                    <h2 class="inline-block text-5xl font-semibold align-middle md:text-7xl">{{ $category->name }}</h2>
                    <span class="block mt-4 text-neutral-300">{{ $category->trips->count() }} Trips</span>
                </div>
            </div>
        </div>
        <div class="pt-3 mx-auto prose prose-slate dark:prose-dark">
            {!! \Str::markdown($category->description) !!}
        </div>


        <section class="relative py-10 px-2.5 overflow-hidden">
            <header class="text-center">
                <h1 class="text-3xl font-semibold text-blue-800 dark:text-sky-50">Trips: {{ $category->name }}</h1>
            </header>
            <div class="max-w-4xl mx-auto my-5 border-t-4 border_gradient rounded-3xl max-md:mx-3"></div>
            <div id="slide-trips" class="rounded-full shadow-lg bg-blue-500/5 shadow-white dark:shadow-blue-500 dark:shadow-md">
                <div class="py-12 swiper-wrapper">
                    @foreach ($category->trips as $trip)
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
                                        <x-image :src="$trip->getMedia('trip')[0]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full shadow rounded-ee-xl" :alt="$trip->title" />
                                        <x-image :src="$trip->getMedia('trip')[1]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-se-xl" :alt="$trip->title" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <x-image :src="$trip->getMedia('trip')[2]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded shadow shadow-blue-500" :alt="$trip->title" />
                                    </div>
                                    <div class="grid grid-rows-2 gap-0.5 overflow-hidden">
                                        <x-image :src="$trip->getMedia('trip')[3]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full rounded-es-xl" :alt="$trip->title" />
                                        <x-image :src="$trip->getMedia('trip')[4]->original_url ?? 'default-placeholder.png'" class="object-cover object-center w-full h-full shadow rounded-ss-xl" :alt="$trip->title" />
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
        </section>


    </main>

    @include('web.partials.footer')
</x-layout>
