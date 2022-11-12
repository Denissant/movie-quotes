@props(['heading'])

<div class="flex flex-col sm:px-6 lg:px-8 bg-neutral-100">
    <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h2>
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 mb-14">
            {{ $slot }}
        </div>
    </div>
</div>
