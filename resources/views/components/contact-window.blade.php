@props([
    "type" => "element",
    "width" => "md",
    "height" => "md",
])

@php
    $defaultClass = "m-lg b-width-sm";

    // checks if component is used as normal element or popup window
    if($type === "popup"){
        $defaultClass = "popup";
    }
@endphp

<x-containers {{ $attributes->merge(['class' => $defaultClass]) }} width="{{ $width }}" height="{{ $height }}" :hasBorder="true" :isBorderRounded="true">
    <form action="POST" action="./contact" class="m-md contact-form">
        <h1 class="mb-md">{{ $header }}</h1>
        <div class="info-field-container mb-md mt-sm">
            <div class="info-field">
                <label for="name" class="mb-sf-weight-lightm f-weight-light">Name</label>
                <input type="text" name="name" id="" class="input-h-md input-w-md has-border b-width-sm border-rounded">
            </div>
            <div class="info-field">
                <label for="name" class="mb-sm f-weight-light">Email</label>
                <input type="email" name="email" id="" class="input-h-md input-w-md has-border b-width-sm border-rounded">
            </div>
            <div class="info-field">
                <label for="phone" class="mb-sm f-weight-light">Phone</label>
                <input type="number" name="phone" id="" class="input-h-md input-w-md has-border b-width-sm border-rounded">
            </div>
        </div>
        <label for="message" class="mb-sm f-weight-light">Message</label>
        <textarea name="message" class="input-h-xl input-w-xl p-sm has-border b-width-sm border-rounded"></textarea>
        <x-buttons type="submit" width="lg" class="mt-md mb-sm bg-black f-color-white">Send</x-buttons>
    </form>
</x-containers>
