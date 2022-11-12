@props(['quote', 'is_odd', 'movie'])

<tr class="@if($is_odd) bg-indigo-50 @endif">
    <td class="break-all py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
        <a href="{{ route('movie.show', [$movie->slug]) . '#' . $quote->id }}">
            {{ $quote->content }}
        </a>
    </td>

    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
        <img src="/storage/{{ $quote->image }}" class="w-20" alt="" />
    </td>

    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
        {{ $quote->author->username }}
    </td>

    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
        {{ $quote->created_at->diffForHumans() }}
    </td>

    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
        <a href="{{ route('movie.show', $movie->slug) }}" class="text-indigo-600 hover:text-indigo-900">
            View Movie
        </a>
    </td>

    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
        <a href="{{ route('admin.movie.quote.edit', [$movie, $quote]) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
    </td>

    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
        <form method="POST" action="{{ route('admin.movie.quote.destroy', [$movie, $quote]) }}">
            @csrf
            @method('DELETE')
            <button data-delete-button data-delete-target="{{ mb_strimwidth($quote->content, 0, 30, '...') }}"
                    class="text-red-600 hover:text-indigo-900">
                Delete
            </button>
        </form>
    </td>
</tr>
