<!-- components/button.blade.php -->

@props(['label', 'type' => 'submit', 'class' => 'btn btn-info'])

<div class="">
    <button type="{{ $type }}" class="{{ $class }}">
        {{ $label }}
    </button>
</div>
