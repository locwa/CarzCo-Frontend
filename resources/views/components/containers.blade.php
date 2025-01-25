@props([
    "type" => 'solid',
    "height" => "md",
    "width" => "md",
])

@php
    $defaultClasses = " container-height-". $height . " container-width-". $width;
@endphp

<div {{ $attributes->merge(['class' => $defaultClasses]) }}>
    {{ $slot }}
</div>
