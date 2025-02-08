<x-app-layout>
    <x-slot:title>{{ $car_details->value('year') ." ". $car_details->value('make') ." ". $car_details->value('model') ." | CarzCo"  }}</x-slot:title>
    <x-image-carousel photoFileHeader="{{ $car_details->value('photo_file_header') }}" photoCount="{{ $car_details->value('photo_count') }}" carInfo="{{ $car_details->value('year'). ' '. $car_details->value('make'). ' '. $car_details->value('model') }}"></x-image-carousel>

    <hr class=" border-[#0f0f0f] dark:border-gray-100 mt-5">

    <div class="px-64 m-8 flex justify-between items-center">
        <div>
            <h3 class="text-2xl">{{ $car_details->value('year') }}</h3>
            <h1 class="text-5xl font-bold">{{ $car_details->value('make') }}</h1>
            <h2 class="text-3xl">{{ $car_details->value('model') }}</h2>
            <a href="{{route('contact')}}" >
                <x-primary-button class="mt-7">Contact Us</x-primary-button>
            </a>
        </div>
        <div class="text-right">
            <h3 class="text-xl">Rent Price:</h3>
            <h1 class="text-4xl font-bold">{{ numfmt_format_currency(numfmt_create('en_US', NumberFormatter::CURRENCY), $car_details->value('rent_price'),"USD") }}</h1>
        </div>
    </div>

    <hr class="border-[#0f0f0f] dark:border-gray-100 pb-5 mx-32">

    <div class="px-64 m-8">
        <p class="whitespace-pre-wrap">{{ $car_details->value('description') }}</p>
    </div>

    <hr class="border-[#0f0f0f] dark:border-gray-100 pb-5">
</x-app-layout>
