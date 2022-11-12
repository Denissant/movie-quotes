@props(['name', 'label'])

<div>
    <x-form.label name="{{ $name }}" label="{{ $label }}" />

    <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
              rows="4" name="{{ $name }}" id="{{ $name }}" required>{{ $slot }}</textarea>

    <x-form.error name="{{ $name }}" />
</div>
