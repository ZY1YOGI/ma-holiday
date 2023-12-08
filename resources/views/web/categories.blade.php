<x-layout title="Categories" description="Categories description" keywords="Categories keywords">
    @include('web.partials.header')


    <main class="container pt-10 pb-16 lg:pb-28 lg:pt-20 space-y-12">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">

            @foreach ($categories as $category)
                <div class="relative flex flex-col group rounded-3xl overflow-hidden bg-white dark:bg-neutral-900 shadow">
                    <span class="absolute top-3 inset-x-3 z-10">
                        <div class="flex flex-wrap space-x-2">
                            @foreach (explode(',', $category->seo_keywords) as $keyword)
                                <h3 role="tag" class="transition-colors hover:text-white duration-300 inline-flex px-2.5 py-1 rounded-full font-medium text-xs relative text-blue-800 bg-blue-100 hover:bg-blue-800">{{ $keyword }}</h3>
                            @endforeach
                        </div>
                    </span>
                    <div class="relative h-[60%]">
                        <x-image :src="$category->getFirstMediaUrl('category')" class="object-cover object-center w-full h-full" :alt="$category->name" />
                        <a class="block absolute inset-0 bg-black/20 transition-opacity opacity-0 group-hover:opacity-100" href="{{ route('category', $category->slug) }}"></a>
                    </div>
                    <a class="absolute inset-0" href="{{ route('category', $category->slug) }}"></a>
                    <div class="p-4 flex flex-col space-y-3">
                        <h1 class="text-2xl uppercase font-bold" title="category Trips | {{ $category->name }}">{{ $category->name }}</h1>
                        <div class="pt-3 prose prose-slate dark:prose-dark text-xs">
                            {!! \Str::markdown($category->description) !!}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </main>





    @include('web.partials.footer')
</x-layout>
