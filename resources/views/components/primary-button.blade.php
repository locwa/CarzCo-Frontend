@props([
   'inverted' => false
])

@php
    $colors = "";
    if ($inverted){
        $colors = 'dark:bg-[#0f0f0f] bg-gray-200 dark:text-white text-[#0f0f0f] dark:hover:bg-gray-700 hover:bg-white dark:focus:bg-gray-700 focus:bg-white dark:active:bg-gray-900 active:bg-gray-300 dark:focus:ring-offset-2 focus:ring-offset-gray-800';
    } else {
        $colors = 'bg-[#0f0f0f] dark:bg-gray-200 text-white dark:text-[#0f0f0f] hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:ring-offset-2 dark:focus:ring-offset-gray-800';
    }
@endphp

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-8 py-4 '. $colors .' border border-transparent rounded-md font-semibold text-md focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
