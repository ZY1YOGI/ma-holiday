<x-layout title="Categories" description="Categories description" keywords="Categories keywords">
    @include('web.partials.header')




    <main class="container pt-10 pb-16 lg:pb-28 lg:pt-20 space-y-12">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">

            @foreach ($categories as $category)
                <div class="relative flex flex-col group rounded-3xl overflow-hidden bg-white dark:bg-neutral-900 h-full">
                    <div class="block flex-shrink-0 relative w-full rounded-t-3xl overflow-hidden z-10 aspect-w-4 aspect-h-3">
                        <div class="relative w-full h-full">
                            <x-image :src="$category->getFirstMediaUrl('ca')" class="object-cover absolute inset-0 w-full h-full" :alt="$category->name" />
                            <a class="block absolute inset-0 bg-black/20 transition-opacity opacity-0 group-hover:opacity-100" href=""></a>
                        </div>
                    </div>
                    <a class="absolute inset-0" href="/single/this-is-single-slug"></a>
                    <span class="absolute top-3 inset-x-3 z-10">
                        <div class="flex flex-wrap space-x-2" data-nc-id="CategoryBadgeList">
                            {{-- @foreach (\Str::length($category->seo_keywords) as $d)
                                <a class="transition-colors hover:text-white duration-300 inline-flex px-2.5 py-1 rounded-full font-medium text-xs relative text-yellow-800 bg-yellow-100 hover:bg-yellow-800" href=""></a>
                            @endforeach --}}
                        </div>
                    </span>
                    <div class="p-4 flex flex-col space-y-3">
                        <h1>{{ $category->name }}</h1>
                        <p class="nc-card-title block text-base font-semibold text-neutral-900 dark:text-neutral-100 line-clamp-2">
                        <div class="mt-10 prose prose-slate dark:prose-dark">{!! $category->description !!}</div>
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </main>







    @include('web.partials.footer')
</x-layout>
