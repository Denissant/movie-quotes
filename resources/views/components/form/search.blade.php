<form method="GET" class="flex items-center mt-3" action="#">
    <div class="flex">
        <label for="search" class="sr-only">{{ __('Search') }}</label>
        <input type="text" name="search" id="search" value="{{ request('search') }}" class="block w-full appearance-none rounded-l-md border-r-0 border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
               placeholder="{{ __('Search...') }}">
        <button class="flex items-center justify-center px-4 border-neutral-300 border-y border-r rounded-r-md bg-indigo-500 hover:bg-indigo-700"
                type="submit">
            <x-svg.search />
        </button>
    </div>
</form>
