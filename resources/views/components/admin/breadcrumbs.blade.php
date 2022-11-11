@props(['nav_title'])

<ol role="list" class="flex space-x-4 rounded-md bg-white px-6 shadow">
    <li class="flex">
        <div class="flex items-center">
            <x-svg.breadcrumb-arrow />
            <a href="/admin/movies" class="ml-4 text-sm font-medium text-indigo-500 hover:text-gray-700">Movies</a>
        </div>
    </li>

    @if($nav_title)
        <li class="flex">
            <div class="flex items-center">
                <x-svg.breadcrumb-arrow />
                <span class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">
                    {{ $nav_title }}
                </span>
            </div>
        </li>
    @endif
</ol>
