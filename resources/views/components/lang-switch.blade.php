<div class="fixed w-full justify-center flex flex-row text-white gap-4 mt-8
                    xl:mt-0 xl:w-min xl:ml-14 xl:flex-col xl:h-screen"
>
    @foreach($available_locales as $locale)
        <x-lang-button name="{{ $locale }}" :active="$current_locale === $locale" />
    @endforeach
</div>
