@props(['nav_title'])

<x-base>
    <main class="min-h-screen bg-neutral-100">
        <nav class="bg-zinc-200 h-20 flex">

            <x-admin.breadcrumbs nav_title="{{ $nav_title }}" />

            <div class="absolute top-5 right-5 gap-5 flex">
                <a href="/">
                    <x-button>Home</x-button>
                </a>

                <form method="POST" action="/logout" class="text-xs font-semibold">
                    @csrf
                    <x-button>Log Out</x-button>
                </form>
            </div>
        </nav>

        {{ $slot }}
    </main>
</x-base>
