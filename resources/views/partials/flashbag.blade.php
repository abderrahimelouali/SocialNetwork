@if (session()->has('success'))
    <x-alert color="success">
        {{ session('success') }}
    </x-alert>
@endif

@if (session()->has('danger'))
    <x-alert color="danger">
        {{ session('danger') }}
    </x-alert>
@endif
