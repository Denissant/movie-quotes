<x-base>

    <x-movies.background>



        <div class="flex justify-center">
            <section class="flex flex-col min-h-screen justify-center items-center text-white
                            py-24 w-10/12 lg:w-full max-w-screen-sm 2xl:max-w-screen-md"
            >
                <h1 class="self-start text-2xl md:text-4xl mb-4 lg:mb-12 2xl:text-5xl 2xl:mb-20">
                    {{ $movie->title }}
                </h1>

                @foreach($movie->quotes as $quote)
                    <x-movies.quote :quote="$quote" />
                @endforeach
            </section>
        </div>

    </x-movies.background>

</x-base>
