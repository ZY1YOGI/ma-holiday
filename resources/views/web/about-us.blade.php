<x-layout title="About Us" description="about-us description" keywords="about-us keywords">
    @include('web.partials.header')
    <div class="text-gray-600 dark:text-gray-300" id="reviews">
        <div class="px-6 mx-auto max-w-7xl md:px-12 xl:px-6">
            <div class="px-6 mb-20 space-y-4 md:px-0">
                <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-white md:text-4xl">
                    We have some fans.
                </h2>
            </div>


            <div class="gap-8 py-12 space-y-8 md:columns-2 lg:columns-3">
                @for ($i = 0; $i < 3; $i++)
                    <div class="p-8 bg-white border border-gray-100 shadow-2xl aspect-auto rounded-3xl dark:bg-gray-800 dark:border-gray-700 shadow-gray-600/10 dark:shadow-none">
                        <div class="flex gap-4">
                            <img class="w-12 h-12 rounded-full" src="{{ fake()->imageUrl() }}" alt="user avatar" width="400" height="400" loading="lazy">
                            <div>
                                <h6 class="text-lg font-medium text-gray-700 dark:text-white">{{ fake()->name() }}</h6>
                                <dl class="flex items-center mt-1 text-xs text-neutral-500 dark:text-neutral-400">
                                    <dt class="sr-only">Date</dt>
                                    <dd class="font-normal text-slate-500 dark:text-slate-200">
                                        <time datetime="{{ fake()->dateTime()->format('M d Y') }}">{{ fake()->dateTime()->format('M d Y') }}</time>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <p class="mt-8">{{ fake()->text(150) }}</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    @include('web.partials.footer')
</x-layout>
