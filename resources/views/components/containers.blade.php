@props([
    'size' => 'md',
])

@php
    $heightValue = '';
    $widthValue = '';

    switch($size){
        case 'md':
            $heightValue = "h-80";
            $widthValue = "w-80";
            break;
        case 'xl':
            $heightValue = "h-[80vh]";
            $widthValue = "w-2/3";
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => "bg-[#0f0f0f] dark:bg-gray-100 text-gray-100 dark:text-[#0f0f0f] rounded flex flex-col items-center justify-center p-5 " . $heightValue . " " . $widthValue]) }}>
    @isset($title)
        <h4 class="text-2xl text-center font-extrabold p-2">{{ $title }}</h4>
    @endisset
    {{ $slot }}
</div>
