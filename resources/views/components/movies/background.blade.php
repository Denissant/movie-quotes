<main class="min-h-screen bg-gradient-radial-dark font-sansation">

    @auth
        <a href="{{ route('admin.movie.index') }}" class="absolute right-2 top-2 md:right-5 md:top-5">
            <x-button>{{ __('Dashboard') }}</x-button>
        </a>
    @endauth

    <x-lang-switch />

    {{ $slot }}
</main>
