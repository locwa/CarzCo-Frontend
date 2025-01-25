@props([
    "height" => "md",
    "width" => "md",
    "hasBorder" => false,
    "isBorderRounded" => false,
])

@php
    $defaultClasses = " container-height-". $height . " container-width-". $width;
    if($hasBorder){
        $defaultClasses .= " has-border";
    }
    if($isBorderRounded){
        $defaultClasses .= " border-rounded";
    }
@endphp

<div {{ $attributes->merge(['class' => $defaultClasses]) }}>
    {{ $slot }}
</div>
