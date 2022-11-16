<x-base>

    <x-movies.background>
        @if($movie)
        <section class="flex flex-col min-h-screen justify-center items-center text-white py-24">
            <img
                src="{{ asset('storage/' . $quote->image) }}"
                class="rounded-xl aspect-video bg-contain md:w-9/12
                       xl:w-[unset] xl:min-w-[45vw] xl:min-h-[50vh] xl:max-w-screen-2xl xl:max-h-[33vh]"
                alt="Image from {{ $movie->title }}"
            />
            <div class="text-3xl md:text-4xl 2xl:text-5xl text-center mx-6 max-w-4xl xl:mx-0">
                <h2 class="mt-10 max-w-4xl">{{ $quote->content }}</h2>
                <h2 class="mt-14 underline">
                    <a href="{{ route('movie.show', $movie->slug) }}">
                        {{ $movie->title }}
                    </a>
                </h2>
            </div>
        </section>
        @else
        <h1 class="flex flex-col justify-center items-center h-screen text-white text-4xl">
            {{ __('There are no quotes yet, check back later!') }}</h1>
        @endif
    </x-movies.background>

</x-base>
