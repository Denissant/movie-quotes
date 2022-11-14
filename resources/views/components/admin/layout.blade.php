@props(['nav_title', 'movie' => ''])

<x-base>
    <main class="min-h-screen bg-neutral-100">
        <nav class="bg-zinc-200 h-20 flex">

            <x-admin.breadcrumbs :nav_title="$nav_title" :movie="$movie" />

            <div class="absolute top-5 right-5 gap-5 flex">

                <x-admin.lang-switch />

                <a href="{{ route('movie.index') }}">
                    <x-button>{{ __('Home') }}</x-button>
                </a>

                <form method="POST" action="{{ route('logout') }}" class="text-xs font-semibold">
                    @csrf
                    <x-button>{{ __('Log Out') }}</x-button>
                </form>
            </div>
        </nav>

        {{ $slot }}
    </main>
</x-base>
