@props([
    "type" => "element",
    "width" => "md",
    "height" => "md",
])

@php
    $defaultClass = "m-lg";

    // checks if component is used as normal element or popup window
    if($type === "popup"){
        $defaultClass = "popup";
    }
@endphp

<x-containers {{ $attributes->merge(['class' => $defaultClass]) }} width="{{ $width }}" height="{{ $height }}" :hasBorder="true" :isBorderRounded="true">
</x-containers>
