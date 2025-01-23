@props([
    "height" => "md",
    "width" => "md",
    "color" => "white",
    "textColor" => "white",
    "isDisabled" => false,
    "type" => "button",
])

@php
    $defaultClasses = "button-h-" . $height . " button-w-" . $width . " button-bg" . $color . " button-text-" .$textColor;
@endphp

<button {{ $attributes->merge(['class' => $defaultClasses]) }} type="{{ $type }}" {{ $isDisabled ?  "disabled" : ""}}>{{ $slot }}</button>


