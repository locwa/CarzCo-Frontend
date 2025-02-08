<x-app-layout>
    <x-slot:title>About Us | CarzCo</x-slot:title>
    <div class="m-10">
        <h1 class="text-5xl font-extrabold text-center">About Us</h1>
        <h4 class="text-md p-2 text-center font-extralight">CarzCo: Your Gateway to Extraordinary Driving Experiences</h4>
    </div>
    <p class="text-lg px-20 text-center">
        At CarzCo, we're passionate about providing discerning drivers with access to the most exhilarating and
        exclusive automotive experiences. Our curated fleet boasts a stunning collection of exotic and luxury vehicles,
        each meticulously maintained and ready to unleash its full potential on the open road.
    </p>

    <hr class="my-10 mx-32">

    <div>
        <h4 class="text-5xl font-extrabold text-center">Our Mission:</h4>
        <p class="text-md p-2 text-center font-extralight">To elevate the driving experience beyond the ordinary. We strive to:</p>
        <div class="flex justify-center gap-10 m-10">
            <x-containers>
                <x-slot:title>Offer Unparalleled selection</x-slot:title>
                <p class="text-lg text-center">From sleek sports cars and powerful SUVs to elegant
                    convertibles and iconic classics, our fleet caters to every discerning taste.</p>
            </x-containers>
            <x-containers>
                <x-slot:title>Provide exceptional service</x-slot:title>
                <p class="text-lg text-center">Our dedicated team is committed to ensuring a seamless and
                    enjoyable rental experience, from personalized consultations to prompt and professional delivery.</p>
            </x-containers>
            <x-containers>
                <x-slot:title>Guarantee complete peace of mind</x-slot:title>
                <p class="text-lg text-center">We prioritize safety and reliability, offering
                    comprehensive insurance options and 24/7 roadside assistance.</p>
            </x-containers>
            <x-containers>
                <x-slot:title>Foster a community of enthusiasts</x-slot:title>
                <p class="text-lg text-center">We connect like-minded individuals who share a passion
                    for automotive excellence.</p>
            </x-containers>
        </div>
    </div>

    <hr class="my-10 mx-32">

    <div>
        <h4 class="text-5xl font-extrabold text-center">Why Choose CarzCo:</h4>
        <div class="flex justify-center gap-10 m-10">
            <x-containers>
                <x-slot:title>Unforgettable memories</x-slot:title>
                <p class="text-lg text-center">Create lasting memories with unforgettable driving experiences.</p>
            </x-containers>
            <x-containers height="md" width="lg">
                <x-slot:title>Impeccable vehicles</x-slot:title>
                <p class="text-lg text-center">Drive meticulously maintained and impeccably presented vehicles.</p>
            </x-containers>
            <x-containers height="md" width="lg">
                <x-slot:title>Personalized service</x-slot:title>
                <p class="text-lg text-center">Enjoy a tailored experience with dedicated customer support.</p>
            </x-containers>
            <x-containers height="md" width="lg">
                <x-slot:title>Unbeatable value</x-slot:title>
                <p class="text-lg text-center">Experience the thrill of exotic car ownership without the long-term
                    commitment.</p>
            </x-containers>
        </div>
    </div>
</x-app-layout>
