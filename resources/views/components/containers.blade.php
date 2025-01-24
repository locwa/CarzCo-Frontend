@props([
    "type" => 'solid',
    "size" => "md",
    "backgroundColor" => "white",
    "borderColor" => "black",
    "borderThickness" => "md",
    "isBorderRounded" => false,
])

@php
    $defaultClasses = "container-size-". $size . " container-bg-" . $backgroundColor; ;
    if ($type === 'hollow'){
        $defaultClasses .= " container-border-color-" . $borderColor . " container-border-thickness" . $borderThickness;
    }

    if ($isBorderRounded){
        $defaultClasses .= " container-border-rounded";
    }
@endphp

<div {{ $attributes->merge(['class' => $defaultClasses]) }}>
    {{ $slot }}
</div>
