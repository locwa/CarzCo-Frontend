<x-app-layout>
    <x-slot:title>Our Cars | CarzCo</x-slot:title>
    <div class="h-[100vh] flex gap-10 p-10">
        <div class="dark:bg-[#1f1f1f] w-1/4 rounded-[20px]"></div>
        <div class="flex gap-10">
            @foreach($fleet_list as $list)
                <div class="w-80 h-3/5 p-4 dark:bg-[#1f1f1f] rounded-[20px]">
                    <img src="./storage/cars/{{ $list->value('photo_file_header') }}0.jpg" alt="car picture" class="rounded-[15px] mb-4">
                    <p class="text-md">{{ $list->value('year') }}</p>
                    <h4 class="text-3xl font-extrabold">{{ $list->value('make') }}</h4>
                    <p class="text-xl">{{ $list->value('model') }}</p>

                    <hr class="my-3">

                    <div class="flex justify-between">
                        <div>
                            <p class="text-md">Rent Price:</p>
                            <h5 class="text-2xl font-bold">{{ numfmt_format_currency(numfmt_create('en_US', NumberFormatter::CURRENCY), $list->value('rent_price'),"USD") }}</h5>
                        </div>
                    </div>

                    <a href="./view-car/{{ $list->value('id') }}">
                        <x-primary-button size="md" class="my-4">View Car</x-primary-button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

<script>



</script>
