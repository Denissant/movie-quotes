<x-admin.layout nav_title="{{ $nav_title }}">

    <x-admin.movie-form heading="Edit {{ $movie->title }}">
        <form class="space-y-6" action="{{ route('admin.movie.update', $movie->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <x-form.input name="title_en" label="Title in English"
                          value="{{ $movie->getTranslation('title', 'en') }}"
            />
            <x-form.input name="title_ka" label="Title in Georgian"
                          value="{{ $movie->getTranslation('title', 'ka') }}"
            />

            <x-form.button>Update</x-form.button>

        </form>
    </x-admin.movie-form>

</x-admin.layout>
