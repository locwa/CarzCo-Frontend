<x-app-layout>
    <x-slot:title>Our Cars | CarzCo</x-slot:title>
    <div class="h-[100vh] flex gap-10 p-10">
        <div class="dark:bg-[#1f1f1f] w-1/4 rounded-[20px]">

        </div>

        <div class="flex flex-wrap gap-10">

            @foreach($fleet_list as $list)
                <div class="w-80 h-3/5 p-4 dark:bg-[#1f1f1f] rounded-[20px]">
                    <img src="./storage/cars/{{ $list->photo_file_header }}0.jpg" alt="car picture" class="object-cover rounded-[15px] mb-4 h-48 w-auto">
                    <p class="text-md">{{ $list->year }}</p>
                    <h4 class="text-3xl font-extrabold">{{ $list->make }}</h4>
                    <p class="text-xl">{{ $list->model }}</p>

                    <hr class="my-3">

                    <div class="flex justify-between">
                        <div>
                            <p class="text-md">Rent Price:</p>
                            <h5 class="text-2xl font-bold">{{ numfmt_format_currency(numfmt_create('en_US', NumberFormatter::CURRENCY), $list->rent_price,"USD") }}</h5>
                        </div>
                    </div>

                    <a href="./view-car/{{ $list->id }}">
                        <x-primary-button size="md" class="my-4">View Car</x-primary-button>
                    </a>
                </div>
            @endforeach
        </div>

    </div>

</x-app-layout>

<script>



</script>
