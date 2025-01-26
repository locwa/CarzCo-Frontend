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
    <form action="POST" action="./contact" class="p-lg">
        <h1>{{ $header }}</h1>
        <label for="name">Name</label>
        <input type="text" name="name" id="">
        <label for="name">Email</label>
        <input type="email" name="email" id="">
        <label for="phone">Phone</label>
        <input type="number" name="phone" id="">
        <label for="message">Message</label>
        <input type="text" name="message" id="">
        <x-buttons type="submit" width="lg">Send</x-buttons>
    </form>
</x-containers>
