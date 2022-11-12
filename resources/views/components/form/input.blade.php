@props(['name', 'label', 'value' => ''])

<div>
    <x-form.label name="{{ $name }}" label="{{ $label }}" />

    <input id="{{ $name }}" name="{{ $name }}" type="text" required
           value="{{ old($name, $value) }}"
           class="mt-1 block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">

    <x-form.error name="{{ $name }}" />
</div>
