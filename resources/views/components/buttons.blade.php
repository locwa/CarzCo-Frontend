@props([
    "height" => "md",
    "width" => "md",
    "color" => "white",
    "textColor" => "white",
    "isDisabled" => false,
    "type" => "button",
])

<button {{ $attributes }} type="{{ $type }}" class="button-h-{{ $height }} button-w-{{ $width }} button-bg-{{ $color }} button-text-{{ $textColor }}" {{ $isDisabled ?  "disabled" : ""}}>{{ $slot }}</button>


