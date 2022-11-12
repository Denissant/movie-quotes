<x-admin.layout :nav_title="$nav_title" :movie="$movie">

    <x-admin.movie-form heading="Edit Quote">
        <form class="space-y-6" action="{{ route('admin.movie.quote.update', [$movie, $quote]) }}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <p class="text-neutral-500">
                Movie: "{{ $movie->title }}"
            </p>

            <x-form.textarea name="content_en" label="Quote content in English">
                {{ old('content_en', $quote->getTranslation('content', 'en')) }}
            </x-form.textarea>
            <x-form.textarea name="content_ka" label="Quote content in Georgian">
                {{ old('content_ka', $quote->getTranslation('content', 'ka')) }}
            </x-form.textarea>

            <x-form.file name="image" label="A shot from the movie" :required="false"
                         value="/storage/{{ $quote->image }}" />

            <x-form.button>Update</x-form.button>
        </form>
    </x-admin.movie-form>

</x-admin.layout>
