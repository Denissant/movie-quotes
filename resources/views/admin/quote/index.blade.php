<x-admin.layout :nav_title="$nav_title">

    @vite('resources/js/deleteConfirmation.js')

    @php
        $title = __('Quotes of "') . $movie->title . '"';
    @endphp

    <x-admin.table
        :title="$title"
        :description="__('All quotes of the movie. You can add, remove, and edit the quotes')"
        :create_label="__('Add a Quote')"
        :create_url="route('admin.movie.quote.create', $movie)"
        :columns="[__('Content'), __('Image'), __('Added By'), __('Date')]"
        :unlabeled_columns="[__('View Movie'), __('Edit'), __('Delete')]"
        :items="$quotes"
    >
        @foreach($quotes as $quote)
            <x-admin.quote-row :quote="$quote" :movie="$movie" is_odd="{{ $loop->odd }}" />
        @endforeach
    </x-admin.table>

</x-admin.layout>
