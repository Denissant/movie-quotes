<form method="GET" class="flex items-center mt-3" action="#">
    <div class="flex">
        <label for="search" class="sr-only">Search</label>
        <input type="text" name="search" id="search" value="{{ request('search') }}" class="block w-full appearance-none rounded-l-md border-r-0 border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
               placeholder="Search...">
        <button class="flex items-center justify-center px-4 border-neutral-300 border-y border-r rounded-r-md bg-indigo-500 hover:bg-indigo-700"
                type="submit">
            <svg class="w-6 h-6 text-gray-600" fill="white" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 24 24">
                <path
                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
            </svg>
        </button>
    </div>
</form>
