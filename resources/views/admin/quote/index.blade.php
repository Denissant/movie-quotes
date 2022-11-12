<x-admin.layout :nav_title="$nav_title">

    @vite('resources/js/deleteConfirmation.js')

    @php
        $title = 'Quotes of "' . $movie->title . '"';
    @endphp

    <x-admin.table
        :title="$title"
        description="All quotes of the movie. You can add, remove, and edit the quotes"
        create_label="Add a Quote"
        :create_url="route('admin.movie.quote.create', $movie)"
        :columns="['Content', 'Image', 'Added By', 'Date']"
        :unlabeled_columns="['View Movie', 'Edit', 'Delete']"
    >
        @foreach($quotes as $quote)
            <x-admin.quote-row :quote="$quote" :movie="$movie" is_odd="{{ $loop->odd }}" />
        @endforeach
    </x-admin.table>

</x-admin.layout>
