@props(['name', 'active'])

<a href="{{ route('language', $name) }}">
    <button type="button"
            class="@if($active) bg-indigo-500 text-white hover:bg-indigo-700 @else text-gray-700 hover:bg-gray-50 @endif
                   relative -ml-px inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium
                   focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
        {{ $name }}
    </button>
</a>
