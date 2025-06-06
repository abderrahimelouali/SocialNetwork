@if (session()->has('success'))
    <x-alert color="success">
        {{ session('success') }}
    </x-alert>
@endif
