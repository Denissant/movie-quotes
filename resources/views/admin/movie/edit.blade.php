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
            <div>
                <button type="submit"
                        class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Update
                </button>
            </div>
        </form>
    </x-admin.movie-form>

</x-admin.layout>
