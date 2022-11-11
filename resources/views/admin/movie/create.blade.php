<x-admin.layout nav_title="{{ $nav_title }}">

    <x-admin.movie-form heading="Add a Movie">
        <form class="space-y-6" action="{{ route('admin.movie.store') }}" method="POST">
            @csrf

            <x-form.input name="title_en" label="Title in English" />
            <x-form.input name="title_ka" label="Title in Georgian" />
            <div>
                <button type="submit"
                        class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Add
                </button>
            </div>
        </form>
    </x-admin.movie-form>

</x-admin.layout>
