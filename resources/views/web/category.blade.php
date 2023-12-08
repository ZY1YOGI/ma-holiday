<x-layout title="Category - {{ $category->name }}" :description="$category->seo_description" :keywords="$category->seo_keywords">
    @include('web.partials.header')




    <main class="container pt-10 pb-16 lg:pb-28 lg:pt-20 space-y-12">
        <div class="w-full px-2 xl:max-w-screen-2xl mx-auto">
            <div class="relative aspect-w-16 aspect-h-13 sm:aspect-h-9 lg:aspect-h-8 xl:aspect-h-5 rounded-3xl md:rounded-[40px]  shadow-lg drop-shadow-lg overflow-hidden z-0">
                <x-image :src="$category->getFirstMediaUrl('category')" sizes="(max-width: 1280px) 100vw, 1536px" class="object-fill object-center w-full h-full rounded-3xl md:rounded-[40px] blur-[1.5px]" :alt="$category->name" />
                <div class="absolute inset-0 bg-black text-white bg-opacity-30 flex flex-col items-center justify-center">
                    <h2 class="inline-block align-middle text-5xl font-semibold md:text-7xl">{{ $category->name }}</h2>
                    <span class="block mt-4 text-neutral-300">{{ $category->trips->count() }} Trips</span>
                </div>
            </div>
        </div>
        <div class="pt-3 prose prose-slate dark:prose-dark mx-auto">
            {!! \Str::markdown($category->description) !!}
        </div>


        <div class="container pt-10 pb-16 lg:pb-28 lg:pt-20 space-y-12">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8 max-md:mx-1.5">


                @foreach ($category->trips as $trip)
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
                                <button class="nc-PostCardLikeAction relative min-w-[68px] flex items-center rounded-full leading-none group transition-colors px-3 h-8 text-xs text-neutral-700 bg-neutral-50 dark:text-neutral-200 dark:bg-neutral-800 hover:bg-rose-50 dark:hover:bg-rose-100 hover:text-rose-600 dark:hover:text-rose-500" title="Liked">
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


    </main>

    @include('web.partials.footer')
</x-layout>
