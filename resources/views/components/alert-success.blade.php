@if (session('success'))
    <div class="mb-4 font-semibold text-center text-green-600">
        {{ session('success') }}
    </div>
@endif
