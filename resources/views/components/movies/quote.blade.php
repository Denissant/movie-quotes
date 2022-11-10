@props(['quote'])

<article class="w-full bg-white rounded-xl mb-16 text-black">
    <img
        src="/storage/images/{{ $quote->image }}"
        class="aspect-video w-full bg-red-500 rounded-t-xl"
        alt=""
    />

    <p class="text-md lg:text-2xl 2xl:text-4xl flex justify-center items-center
              pt-2 pb-3 px-2 lg:pt-8 lg:pb-11 lg:px-6">
        {{ $quote->content }}
    </p>
</article>
