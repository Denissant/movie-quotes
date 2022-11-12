<x-admin.layout :nav_title="$nav_title">

    @vite('resources/js/deleteConfirmation.js')

    <x-admin.table
        title="Movies"
        description="All movies added to the database. You can add, remove, and edit movies or view their quotes"
        create_label="Add Movie"
        :create_url="route('admin.movie.create')"
        :columns="['Title', 'Added By', 'Date']"
        :unlabeled_columns="['View Movie', 'Manage Quotes', 'Edit', 'Delete']"
        :items="$movies"
    >
        @foreach($movies as $movie)
            <x-admin.movie-row :movie="$movie" is_odd="{{ $loop->odd }}" />
        @endforeach
    </x-admin.table>

</x-admin.layout>
