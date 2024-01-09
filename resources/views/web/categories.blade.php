@php
    $categoriesDescription = 'The Category Marsa Alam Holiday: ';
    $categoriesKeywords = 'ma-holiday, marsa alam holiday, trips, ';
    foreach ($categories as $category) {
        $categoriesDescription .= "$category->name, ";
        $categoriesKeywords .= "$category->name, ";
    }
    $categoriesDescription .= 'and More list categories';
    $categoriesKeywords .= 'categories trips, marsa alam';
@endphp

<x-layout title="Categories" :description="$categoriesDescription" :keywords="$categoriesKeywords">
    @include('web.partials.header')

    <main class="container pt-10 pb-16 space-y-12 lg:pb-28 lg:pt-20">
        <header class="text-center mb-5 space-y-2.5">
            <h1 class="text-4xl font-bold tracking-wider text-blue-950 dark:text-blue-400">Categories Trips</h1>
            <p class="px-1.5 text-gray-700 dark:text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid architecto consequatur a tenetur quis assumenda nihil ut quo!
            </p>
        </header>

        @foreach ($categories as $category)
            <section class="relative py-10 px-2.5 overflow-hidden">
                <header class="text-center">
                    <h1 class="text-3xl">{{ $category->name }}</h1>
                    <div class="flex items-center justify-center overflow-auto whitespace-nowrap space-x-1 w-full *:rounded-full *:transition *:bg-blue-100 *:text-blue-500 *:px-2 *:py-1 my-1">
                        <h3 class="hover:text-white hover:bg-blue-500">{{ $category->name }}</h3>
                        @foreach ($category->getSeoKeywords() as $keyword)
                            <h3 role="tag" class="hover:text-white hover:bg-blue-500">{{ $keyword }}</h3>
                        @endforeach
                    </div>
                    <p class="block mt-4 text-gray-500">{{ $category->trips->count() }} Trips</p>
                </header>
                <div id="slide-trips" class="rounded-full shadow-lg bg-blue-500/5 shadow-white/50 dark:shadow-blue-500 dark:shadow-md mt-2.5">
                    <div class="py-12 swiper-wrapper">
                        @foreach ($category->trips as $trip)
                            <div class="py-3 border border-blue-300 shadow swiper-slide bg-body-light rounded-xl shadow-blue-500 dark:bg-body-dark dark:border-blue-950">
                                <div class="flex items-center justify-center overflow-auto whitespace-nowrap space-x-1 w-full max-md:p-2.5 *:rounded-full *:transition *:bg-blue-100 *:text-blue-800 *:px-3 *:py-1.5 mb-1">
                                    <h3 class="hover:text-white hover:bg-blue-500">{{ $category->name }}</h3>
                                    @foreach ($trip->getSeoKeywords() as $keyword)
                                        <h3 role="tag" class="hover:text-white hover:bg-blue-500">{{ $keyword }}</h3>
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
        @endforeach
    </main>

    @include('web.partials.footer')
</x-layout>
