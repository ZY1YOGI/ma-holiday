<x-layout :title="$trip->title" :description="$trip->seo_description" :keywords="$trip->seo_keywords">
    @include('web.partials.header')





    <main class="max-w-5xl container mt-8 lg:mt-16">
        <div class="">
            <header class="rounded-xl space-y-6">
                <div class="nc-CategoryBadgeList flex flex-wrap space-x-2" data-nc-id="CategoryBadgeList">
                    @foreach (explode(',', $trip->seo_keywords) as $keyword)
                        <h3 role="tag" class="transition-colors hover:text-white duration-300 px-2.5 py-1 rounded-full font-medium relative text-blue-800 bg-blue-100 hover:bg-blue-800">{{ $keyword }}</h3>
                    @endforeach
                </div>
                <div class="space-y-5">
                    <h1 class="text-neutral-900 font-semibold text-4xl md:leading-[120%] lg:text-5xl dark:text-neutral-100">
                        {{ $trip->title }}
                    </h1>
                    <p class="block text-base text-neutral-500 md:text-lg dark:text-neutral-400 max-w-4xl w-full">
                        {{ $trip->description }}
                    </p>
                </div>
                <div class="w-full border-b border-neutral-200 dark:border-neutral-700"></div>
                <div class="flex flex-col sm:flex-row justify-between sm:items-end space-y-5 sm:space-y-0 sm:space-x-5">
                    <div class="flex flex-row space-x-2.5 items-center">
                        <button class="relative min-w-[68px] flex items-center rounded-full leading-none group transition-colors px-4 h-9 text-sm text-neutral-700 bg-neutral-50 dark:text-neutral-200 dark:bg-neutral-800 hover:bg-blue-50 dark:hover:bg-blue-100 hover:text-blue-600 dark:hover:text-blue-500" title="Liked">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11.995 7.23319C10.5455 5.60999 8.12832 5.17335 6.31215 6.65972C4.49599 8.14609 4.2403 10.6312 5.66654 12.3892L11.995 18.25L18.3235 12.3892C19.7498 10.6312 19.5253 8.13046 17.6779 6.65972C15.8305 5.18899 13.4446 5.60999 11.995 7.23319Z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-neutral-900 dark:text-neutral-200">34</span>
                        </button>
                        <button class="flex-shrink-0 flex items-center justify-center focus:outline-none h-9 w-9 bg-neutral-100 hover:bg-neutral-200 dark:bg-neutral-800 dark:hover:bg-neutral-700 text-neutral-700 dark:text-neutral-200 rounded-full" title="More" id="headlessui-menu-button-:r4c:" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </header>
            <div class="my-12 grid grid-cols-3 gap-3 max-md:grid-cols-2 justify-items-center">
                @foreach ($trip->getMedia('trip') as $image)
                    <x-image :src="$image->original_url" alt="" class="rounded-xl object-cover object-center  hover:scale-[2] transition-all duration-300 hover:z-50 cursor-pointer" />
                @endforeach
            </div>
        </div>





        <div class="container px-5">
            <div class="nc-SingleContent space-y-10">
                <div class="prose prose-slate dark:prose-dark prose-sm sm:prose lg:prose-lg mx-auto dark:prose-invert prose-img:w-full prose-img:rounded-2xl prose-img:shadow-md">
                    {!! \Str::markdown($trip->content) !!}
                </div>
                <div class="mx-auto flex flex-wrap mt-12">
                    @foreach (explode(',', $trip->seo_keywords) as $keyword)
                        <h3 role="tag" class="transition-colors hover:text-white duration-300 px-2.5 py-1 rounded-full font-medium relative text-blue-800 bg-blue-100 hover:bg-blue-800">{{ $keyword }}</h3>
                    @endforeach
                </div>
                <div class="mx-auto border-b border-t border-neutral-100 dark:border-neutral-700"></div>
            </div>
        </div>




        {{-- <div class="relative bg-neutral-100 dark:bg-neutral-800 py-16 lg:py-28 my-16 lg:my-28">
            <div class="container">
                <div class="nc-Section-Heading relative flex flex-col sm:flex-row sm:items-end justify-between mb-10 text-neutral-900 dark:text-neutral-50">
                    <div class="max-w-2xl">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold">Related trips</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">
                    @foreach ($trip->category->trips as $trip)
                        <div class="relative flex flex-col group rounded-3xl overflow-hidden bg-white dark:bg-neutral-900 h-full shadow">
                            <a class="absolute inset-0" href="{{ route('trip', $trip->slug) }}"></a>
                            <span class="absolute top-3 inset-x-3 z-10">
                                <div class="flex flex-wrap space-x-2">
                                    @foreach (explode(',', $trip->seo_keywords) as $keyword)
                                        <h3 role="tag" class="transition-colors hover:text-white duration-300 px-2.5 py-1 rounded-full font-medium text-xs relative text-blue-800 bg-blue-100 hover:bg-blue-800">{{ $keyword }}</h3>
                                    @endforeach
                                </div>
                            </span>
                            <div class="block group flex-shrink-0 relative w-full aspect-w-16 aspect-h-16 sm:aspect-h-9 overflow-hidden z-0">
                                <div class="w-full h-full grid grid-cols-3 gap-0.5">
                                    <div class="grid ">
                                        <div class="relative">
                                            <x-image :src="$trip->getMedia('trip')[0]->original_url ?? 'https://montevista.greatheartsamerica.org/wp-content/uploads/sites/2/2016/11/default-placeholder.png'" class="object-cover object-center w-full h-full" :alt="$trip->title" />
                                        </div>
                                    </div>
                                    <div class="grid grid-rows-2 gap-0.5">
                                        <div class="relative">
                                            <x-image :src="$trip->getMedia('trip')[1]->original_url ?? 'https://montevista.greatheartsamerica.org/wp-content/uploads/sites/2/2016/11/default-placeholder.png'" class="object-cover object-center w-full h-full" :alt="$trip->title" />
                                        </div>
                                        <div class="relative">
                                            <x-image :src="$trip->getMedia('trip')[2]->original_url ?? 'https://montevista.greatheartsamerica.org/wp-content/uploads/sites/2/2016/11/default-placeholder.png'" class="object-cover object-center w-full h-full" :alt="$trip->title" />
                                        </div>
                                    </div>
                                    <div class="grid ">
                                        <div class="relative">
                                            <x-image :src="$trip->getMedia('trip')[3]->original_url ?? 'https://montevista.greatheartsamerica.org/wp-content/uploads/sites/2/2016/11/default-placeholder.png'" class="object-cover object-center w-full h-full" :alt="$trip->title" />
                                        </div>
                                    </div>
                                </div>
                                <a class="block absolute inset-0 bg-black/20 transition-opacity opacity-0 group-hover:opacity-100" href="{{ route('trip', $trip->slug) }}"></a>
                            </div>
                            <p class="p-3 text-sm max-h-80 overflow-hidden h-full">
                                {{ $trip->description }}
                            </p>
                            <div class="p-4 flex flex-col space-y-3">
                                <div class="nc-PostCardMeta inline-flex items-center flex-wrap text-neutral-800 dark:text-neutral-200 leading-none text-xs">
                                    <span class="block text-neutral-700 hover:text-black dark:text-neutral-300 dark:hover:text-white font-medium">Ma-Holiday</span>
                                    <span class="text-neutral-500 dark:text-neutral-400 mx-[6px] font-medium">·</span>
                                    <dl>
                                        <dt class="sr-only">Date</dt>
                                        <dd class="text-neutral-500 dark:text-neutral-400 font-normal">
                                            <time datetime="{{ $trip->created_at }}">{{ $trip->created_at->format('M d Y') }}</time>
                                        </dd>
                                    </dl>
                                </div>
                                <h3 class="nc-card-title block text-base font-semibold text-neutral-900 dark:text-neutral-100">
                                    <span class="line-clamp-2" title="">
                                    </span>
                                </h3>
                                <div class="flex items-end justify-between mt-auto">
                                    <button class="nc-PostCardLikeAction relative min-w-[68px] flex items-center rounded-full leading-none group transition-colors px-3 h-8 text-xs text-neutral-700 bg-neutral-50 dark:text-neutral-200 dark:bg-neutral-800 hover:bg-blue-50 dark:hover:bg-blue-100 hover:text-blue-600 dark:hover:text-blue-500" title="Liked">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11.995 7.23319C10.5455 5.60999 8.12832 5.17335 6.31215 6.65972C4.49599 8.14609 4.2403 10.6312 5.66654 12.3892L11.995 18.25L18.3235 12.3892C19.7498 10.6312 19.5253 8.13046 17.6779 6.65972C15.8305 5.18899 13.4446 5.60999 11.995 7.23319Z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="ml-1 text-neutral-900 dark:text-neutral-200">34</span>
                                    </button>
                                    <button class="px-3 py-2 bg-gray-200 rounded-lg shadow text-neutral-700 dark:text-neutral-300">
                                        show
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> --}}
    </main>







    @include('web.partials.footer')
</x-layout>
