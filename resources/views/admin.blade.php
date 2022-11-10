<x-base>
    <h4>
        Admin Page <br>
        Logged in as: {{ auth()->user()->username }}
    </h4>

    <form method="POST" action="/logout" class="text-xs font-semibold">
        @csrf
        <button type="submit" class="inline-flex items-center rounded-full border border-transparent bg-indigo-600 px-5 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Log out
        </button>
    </form>

</x-base>
