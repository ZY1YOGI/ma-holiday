<x-layout :title="$trip->title" :description="$trip->seo_description" :keywords="$trip->seo_keywords">
    @include('web.partials.header')


    @include('web.partials.footer')
</x-layout>
