<x-admin.layout :nav_title="$nav_title" :movie="$movie">

    <x-admin.movie-form :heading="__('Add a Quote')">
        <form class="space-y-6" action="{{ route('admin.movie.quote.store', $movie) }}"
              method="POST" enctype="multipart/form-data">
            @csrf

            <p class="text-neutral-500">
                {{ __('Movie') }}: "{{ $movie->title }}"
            </p>

            <x-form.textarea name="content_en" :label="__('Quote content in English')">{{ old('content_en') }}</x-form.textarea>
            <x-form.textarea name="content_ka" :label="__('Quote content in Georgian')">{{ old('content_ka') }}</x-form.textarea>
            <x-form.file name="image" :label="__('A shot from the movie')" :required="true" />

            <x-form.button>{{ __('Add') }}</x-form.button>
        </form>
    </x-admin.movie-form>

</x-admin.layout>
