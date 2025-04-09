<x-app-layout>
    <x-slot:title>Our Cars | CarzCo</x-slot:title>
    <div class="flex gap-10 p-10">
        <!-- <div class=" max-h-[80vh] border-[#0f0f0f] border-[2px] dark:bg-[#1f1f1f] min-w-[25vw] rounded-[20px]">

        </div> -->

        <div class="flex flex-wrap gap-10 justify-center">

            @foreach($fleet_list as $list)
                <div class="w-80 h-[65vh] flex flex-col justify-center p-4  border-[#0f0f0f] border-[2px] dark:bg-[#1f1f1f] rounded-[20px]">
                    <img src="{{ $disk->url($list->photo_file_header). "0.jpg" }}" alt="car picture" class="object-cover rounded-[15px] mb-4 h-48 w-auto border-[2px] border-[#0f0f0f] dark:border-gray-100">
                    <p class="text-md">{{ $list->year }}</p>
                    <h4 class="text-3xl font-extrabold">{{ $list->make }}</h4>
                    <p class="text-xl">{{ $list->model }}</p>

                    <hr class="my-3 border-[#0f0f0f] dark:border-gray-100">

                    <div class="flex justify-between">
                        <div>
                            <p class="text-md">Rent Price:</p>
                            <h5 class="text-2xl font-bold">{{ numfmt_format_currency(numfmt_create('en_US', NumberFormatter::CURRENCY), $list->rent_price,"USD") }}</h5>
                        </div>
                        <p class="text-md">ID: {{ $list->id }}</p>
                    </div>

                    <a href="{{ route('view-car', ['id' => $list->id]) }}">
                        <x-primary-button size="md" class="my-4">View Car</x-primary-button>
                    </a>
                </div>
            @endforeach
        </div>

    </div>

    <hr class="border-[#0f0f0f] dark:border-gray-100 pb-5">

</x-app-layout>

<script>



</script>
