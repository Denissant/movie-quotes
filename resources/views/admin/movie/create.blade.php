<x-admin.layout :nav_title="$nav_title">

    <x-admin.movie-form :heading="__('Add a Movie')">
        <form class="space-y-6" action="{{ route('admin.movie.store') }}" method="POST">
            @csrf

            <x-form.input name="title_en" :label="__('Title in English')" />
            <x-form.input name="title_ka" :label="__('Title in Georgian')" />

            <x-form.button>{{ __('Add') }}</x-form.button>

        </form>
    </x-admin.movie-form>

</x-admin.layout>
