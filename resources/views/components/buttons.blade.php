@props([
    "height" => "md",
    "width" => "md",
    "color" => "white",
    "textColor" => "white",
    "isDisabled" => false,
    "type" => "button",
    "isLink" => false,
    "linkTo" => "./",
])

@php
    $defaultClasses = "button-h-" . $height . " button-w-" . $width . " button-bg-" . $color . " button-text-" .$textColor;
@endphp

@if($isLink)
    <a href="{{ $linkTo }}"><button {{ $attributes->merge(['class' => $defaultClasses]) }} type="{{ $type }}" {{ $isDisabled ?  "disabled" : ""}}>{{ $slot }}</button></a>
@else
    <button {{ $attributes->merge(['class' => $defaultClasses]) }} type="{{ $type }}" {{ $isDisabled ?  "disabled" : ""}}>{{ $slot }}</button>
@endif



