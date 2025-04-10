<x-app-layout>
    <x-slot:title>{{ $car_details->value('year') ." ". $car_details->value('make') ." ". $car_details->value('model') ." | CarzCo"  }}</x-slot:title>
    <x-image-carousel photoFileHeader="{{ $disk->url($car_details->value('photo_file_header')) }}" photoCount="{{ $car_details->value('photo_count') }}" photoExtension="jpg" carInfo="{{ sprintf('A photo of %u %s %s', $car_details->value('year'), $car_details->value('make'), $car_details->value('model')) }}">
        <x-slot:heading>
            <h1 class="text-3xl md:text-5xl font-semibold">{{ sprintf('%u %s %s', $car_details->value('year'), $car_details->value('make'), $car_details->value('model')) }}</h1>
        </x-slot:heading>
        <x-slot:details class="flex flex-col justify-end">
            <div class="text-left mt-4">
                <h3 class="text-lg">Rent Price:</h3>
                <h1 class="text-3xl font-bold">{{ numfmt_format_currency(numfmt_create('en_US', NumberFormatter::CURRENCY), $car_details->value('rent_price'),"USD") }}</h1>
                <a href="{{route('contact')}}" >
                    <x-primary-button class="mt-7">Contact Us</x-primary-button>
                </a>
            </div>
        </x-slot:details>
    </x-image-carousel>
    <hr class=" border-[#0f0f0f] dark:border-gray-100 mt-5">


    <div class="md:px-64 px-4 my-12">
        <p class="whitespace-pre-wrap">{{ $car_details->value('description') }}</p>
    </div>

    <hr class="border-[#0f0f0f] dark:border-gray-100 pb-5">
</x-app-layout>
