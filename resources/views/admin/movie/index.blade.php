<x-admin.layout :nav_title="$nav_title">

    @vite('resources/js/deleteConfirmation.js')

    <x-admin.table
        :title="__('Movies')"
        :description="__('All movies added to the database. You can add, remove, and edit movies or view their quotes')"
        :create_label="__('Add Movie')"
        :create_url="route('admin.movie.create')"
        :columns="[__('Title'), __('Added By'), __('Date')]"
        :unlabeled_columns="[__('View Movie'), __('Manage Quotes'), __('Edit'), __('Delete')]"
        :items="$movies"
    >
        @foreach($movies as $movie)
            <x-admin.movie-row :movie="$movie" is_odd="{{ $loop->odd }}" />
        @endforeach
    </x-admin.table>

</x-admin.layout>
