@if (session()->has('success'))
    <div id="flashed-message" class="fixed text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm bg-indigo-600">
        <p>{{ session('success') }}</p>
    </div>
@endif
