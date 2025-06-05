@props(['color'])

<div class="alert alert-{{ $color }}" role="alert">
    <strong>{{ $slot }}</strong>
</div>


