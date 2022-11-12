@props(['name', 'label', 'required', 'value' => ''])

@vite('resources/js/imagePreview.js')

<div>
    <x-form.label name="{{ $name }}" label="{{ $label }}" />

    <input id="{{ $name }}" name="{{ $name }}" type="file" @if($required) required @endif
           data-image-input
           accept="image/png, image/gif, image/jpeg"
           class="mt-1 block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">

    <img data-image-preview
         @if($value)
             src="{{ $value }}"
         @else
             hidden
             src="#"
         @endif
         alt="Uploaded image preview"
         class="rounded-xl mt-3"
    />

    <x-form.error name="{{ $name }}" />
</div>
