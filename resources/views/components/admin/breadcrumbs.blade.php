@props(['nav_title'])

<ol role="list" class="flex space-x-4 rounded-md bg-white px-6 shadow">
    <li class="flex">
        <div class="flex items-center">
            <svg class="h-full w-6 flex-shrink-0 text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
            </svg>
            <a href="/admin/movies" class="ml-4 text-sm font-medium text-indigo-500 hover:text-gray-700">Movies</a>
        </div>
    </li>

    @if($nav_title)
        <li class="flex">
            <div class="flex items-center">
                <svg class="h-full w-6 flex-shrink-0 text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                </svg>
                <span class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">
                    {{ $nav_title }}
                </span>
            </div>
        </li>
    @endif
</ol>
