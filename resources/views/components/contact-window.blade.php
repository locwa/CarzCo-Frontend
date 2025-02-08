@props([
    "type" => "element",
    "size" => "xl",
])

@php

    // checks if component is used as normal element or popup window
    if($type === "popup"){
        $defaultClass = "popup";
    }
@endphp

<x-containers {{ $attributes->merge(['class' => '']) }} size="{{ $size }}">
    <form action="POST" action="mailto:customers@carzco.com" class="w-2/4 flex flex-col">
        @csrf
        <h1 class="text-5xl font-bold text-center pb-10">{{ $header }}</h1>
        <div class="flex flex-col items-center">
            <div class="flex flex-col w-full pb-5">
                <label for="name" class="mb-1">Name:</label>
                <input type="text" name="name" id="" class="bg-gray-300 w-full h-10 rounded" @required('true')>
            </div>
            <div class="flex flex-col w-full pb-5">
                <label for="name" class="mb-1">Email</label>
                <input type="email" name="email" id="" class="bg-gray-300 w-full h-10 rounded" @required('true')>
            </div>
            <div class="flex flex-col w-full pb-5">
                <label for="phone" class="mb-1">Phone</label>
                <input type="number" name="phone" id="" class="bg-gray-300 w-full h-10 rounded" @required('true')>
            </div>
        </div>
        <label for="message" class="mb-sm f-weight-light" @required('true')>Message</label>
        <textarea name="message" rows="6" class="bg-gray-300 w-full rounded"></textarea>
        <x-primary-button :inverted="true" type="submit" width="lg" class=" mx-48 my-4 flex justify-center">Send</x-primary-button>
    </form>
</x-containers>
