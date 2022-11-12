<x-admin.layout nav_title="{{ $nav_title }}">

    <x-admin.movie-form heading="Add a Movie">
        <form class="space-y-6" action="{{ route('admin.movie.store') }}" method="POST">
            @csrf

            <x-form.input name="title_en" label="Title in English" />
            <x-form.input name="title_ka" label="Title in Georgian" />

            <x-form.button>Add</x-form.button>

        </form>
    </x-admin.movie-form>

</x-admin.layout>
