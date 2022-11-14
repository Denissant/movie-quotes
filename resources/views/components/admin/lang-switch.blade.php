<span class="isolate inline-flex rounded-md shadow-sm">
    @foreach($available_locales as $locale)
        <x-admin.lang-button name="{{ $locale }}" :active="$current_locale === $locale" />
    @endforeach
</span>
