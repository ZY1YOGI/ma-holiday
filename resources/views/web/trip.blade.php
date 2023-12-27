<x-layout :title="'Trips | ' . $trip->title" :description="$trip->seo_description" :keywords="$trip->seo_keywords">
    @include('web.partials.header')

    <main class="container mt-8 lg:mt-16">
        <div class="container max-w-5xl max-md:px-2.5">
            <header class="space-y-6 rounded-xl">
                <div class="flex items-center justify-center flex-wrap space-x-2 w-full max-md:p-2.5 md:text-xl *:rounded-full *:transition *:bg-blue-100 *:text-blue-800">
                    <h3 class="px-4 py-2 hover:text-white hover:bg-blue-800">Ma-Holiday</h3>
                    <h3 class="px-4 py-2 hover:text-white hover:bg-blue-800">Trips</h3>
                    @foreach ($trip->getSeoKeywords() as $keyword)
                        <h3 role="tag" class="px-4 py-2 hover:text-white hover:bg-blue-800">{{ $keyword }}</h3>
                    @endforeach
                </div>
                <div class="space-y-5">
                    <h1 class="text-neutral-900 font-semibold text-4xl md:leading-[120%] lg:text-5xl dark:text-neutral-100">
                        {{ $trip->title }}
                    </h1>
                    <p class="block w-full max-w-4xl text-base text-neutral-500 md:text-lg dark:text-neutral-400">
                        {{ $trip->description }}
                    </p>
                </div>
                <div class="w-full border-b border-neutral-200 dark:border-neutral-700"></div>
                <button class="flex items-center justify-center flex-shrink-0 rounded-full focus:outline-none h-9 w-9 bg-neutral-100 hover:bg-neutral-200 dark:bg-neutral-800 dark:hover:bg-neutral-700 text-neutral-700 dark:text-neutral-200" title="More" id="headlessui-menu-button-:r4c:" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                    </svg>
                </button>
            </header>
            <div class="grid grid-cols-3 gap-3 my-12 max-md:grid-cols-2 justify-items-center">
                @foreach ($trip->getMedia('trip') as $image)
                    <x-image :src="$image->getUrl()" :alt="$image->name" class="rounded-xl object-cover object-center hover:scale-[2] transition-all duration-300 hover:z-50 cursor-pointer" />
                @endforeach
            </div>
        </div>


        <div class="container max-w-5xl px-5">
            <div class="space-y-10 nc-SingleContent">
                <div class="mx-auto prose-sm prose prose-slate dark:prose-dark sm:prose lg:prose-lg dark:prose-invert prose-img:w-full prose-img:rounded-2xl prose-img:shadow-md">
                    {!! \Str::markdown($trip->content) !!}
                </div>
                <div class="flex items-center justify-center flex-wrap space-x-2 w-full max-md:p-2.5 md:text-xl *:rounded-full *:transition *:bg-blue-100 *:text-blue-800">
                    <h3 class="px-4 py-2 hover:text-white hover:bg-blue-800">Ma-Holiday</h3>
                    <h3 class="px-4 py-2 hover:text-white hover:bg-blue-800">Trips</h3>
                    @foreach ($trip->getSeoKeywords() as $keyword)
                        <h3 role="tag" class="px-4 py-2 hover:text-white hover:bg-blue-800">{{ $keyword }}</h3>
                    @endforeach
                </div>
                <div class="mx-auto border-t border-b border-neutral-100 dark:border-neutral-700"></div>
            </div>
        </div>


        <section class="relative px-2.5 overflow-hidden my-6">
            <header class="py-6 space-y-3">
                <h1 class="text-3xl font-bold md:text-5xl text-sky-950 dark:text-sky-500">Related Trips</h1>
                <p class="text-xl md:text-2xl text-sky-900/80 dark:text-sky-600">Related Trips discover what we offer</p>
            </header>
            <div class="max-w-4xl mx-auto my-5 border-t-4 border_gradient rounded-3xl max-md:mx-3"></div>
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
