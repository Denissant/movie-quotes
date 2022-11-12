@props(['movie', 'is_odd'])

<tr class="@if($is_odd) bg-indigo-50 @endif">
    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
        <a href="{{ route('movie.show', $movie->slug) }}">
            {{ $movie->title }}
        </a>
    </td>

    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
        {{ $movie->author->username }}
    </td>

    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
        {{ $movie->created_at->diffForHumans() }}
    </td>

    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
        <a href="{{ route('movie.show', $movie->slug) }}" class="text-indigo-600 hover:text-indigo-900">
            View Movie
        </a>
    </td>

    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
        <a href="{{ route('admin.movie.quote.index', $movie->id) }}"
           class="text-indigo-600 hover:text-indigo-900 ring-indigo-500 ring-1 ring-offset-8 rounded-xl @if($is_odd) ring-offset-indigo-50 @endif">
            Manage Quotes
        </a>
    </td>

    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
        <a href="{{ route('admin.movie.edit', $movie->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
    </td>

    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
        <form method="POST" action="{{ route('admin.movie.destroy', $movie->id) }}">
            @csrf
            @method('DELETE')
            <button data-delete-button data-delete-target="{{ $movie->title }}"
                    class="text-red-600 hover:text-indigo-900">
                Delete
            </button>
        </form>
    </td>
</tr>
