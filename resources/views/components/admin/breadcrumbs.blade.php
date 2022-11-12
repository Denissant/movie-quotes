@props(['nav_title', 'movie' => null])

<ol role="list" class="flex space-x-4 rounded-md bg-white px-6 shadow">
    <li class="flex">
        <div class="flex items-center">
            <x-svg.breadcrumb-arrow />
            <a href="{{ route('admin.movie.index') }}" class="ml-4 text-sm font-medium text-indigo-500 hover:text-indigo-800 font-bold">
                Movies
            </a>
        </div>
    </li>

    @foreach($nav_title as $title)
        <li class="flex">
            <div class="flex items-center">
                <x-svg.breadcrumb-arrow />

                @if($loop->last)
                    <span class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">
                        {{ $title }}
                    </span>
                @else
                    <a href="{{ route('admin.movie.quote.index', $movie->id) }}">
                        <span class="ml-4 text-sm font-medium text-indigo-500 hover:text-indigo-800 font-bold" aria-current="page">
                            {{ $title }}
                        </span>
                    </a>
                @endif
            </div>
        </li>
    @endforeach
</ol>
