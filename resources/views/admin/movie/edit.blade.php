<x-admin.layout :nav_title="$nav_title">

    <x-admin.movie-form :heading="__('Edit ') . $movie->title">
        <form class="space-y-6" action="{{ route('admin.movie.update', $movie->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <x-form.input name="title_en" :label="__('Title in English')"
                          value="{{ $movie->getTranslation('title', 'en') }}"
            />
            <x-form.input name="title_ka" :label="__('Title in Georgian')"
                          value="{{ $movie->getTranslation('title', 'ka') }}"
            />

            <x-form.button>{{ __('Update') }}</x-form.button>

        </form>
    </x-admin.movie-form>

</x-admin.layout>
