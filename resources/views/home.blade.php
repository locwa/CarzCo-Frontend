<x-app-layout>
    <x-slot:title>CarzCo | Exotic Car Rental Website</x-slot:title>
    <div class="hero h-[40rem] w-full">
        <h1 class="text-5xl font-extrabold p-8 text-center text-gray-100">Rent Exotic and Luxury Cars</h1>
    </div>
    <section class="p-10">
        <h1 class="text-5xl font-extrabold pt-8 text-center text-[#0f0f0f] dark:text-gray-100">At CarzCo, We Provide Top Quality Exotic and Luxury Cars for Rent</h1>
        <p class="text-lg font-extralight text-center p-6 text-[#0f0f0f] dark:text-gray-100">We always provide a variety of Exotic and Luxury cars that are in Top Shape and a Reasonable Price</p>
    </section>
    <hr class="mx-32 border-[#0f0f0f] dark:border-gray-100">
    <section class="my-10">
        <h1 class="text-5xl font-extrabold pt-8 text-center text-[#0f0f0f] dark:text-gray-100">Popular Exotic and Luxury Car Brands</h1>
        <p class="text-lg font-extralight text-center p-6 text-[#0f0f0f] dark:text-gray-100">Discover some of the most popular brands that we carry</p>
        <div class="flex flex-col items-center my-10">
                <div class="flex mb-20">
                <a href="./fleet/rolls-royce" class="home-brand-logos">
                    <x-brand-logos.rolls-royce></x-brand-logos.rolls-royce>
                </a>
                <a href="./fleet/ferrari" class="home-brand-logos">
                    <x-brand-logos.ferrari></x-brand-logos.ferrari>
                </a>
                <a href="./fleet/bentley" class="home-brand-logos">
                    <x-brand-logos.bentley></x-brand-logos.bentley>
                </a>
            </div>
            <div class="flex">
                <a href="./fleet/lamborghini" class="home-brand-logos">
                    <x-brand-logos.lamborghini></x-brand-logos.lamborghini>
                </a>
                <a href="./fleet/mclaren" class="home-brand-logos">
                    <x-brand-logos.mclaren></x-brand-logos.mclaren>
                </a>
                <a href="./fleet/porsche" class="home-brand-logos">
                    <x-brand-logos.porsche class="object-contain"></x-brand-logos.porsche>
                </a>
            </div>
        </div>
    </section>
    <hr class="mx-32 border-[#0f0f0f] dark:border-gray-100">
    <section class="my-10">
        <h1 class="text-5xl font-extrabold pt-10 pb-20 text-center text-[#0f0f0f] dark:text-gray-100">Services That We Offer</h1>
        <div class="flex justify-center gap-32">
            <a href="./contact" class="flex flex-col items-center">
                <x-service-graphics.chauffeur></x-service-graphics.chauffeur>
                <h3 class="text-xl font-medium text-center p-6 text-[#0f0f0f] dark:text-gray-100">Chauffeur Services</h3>
            </a>
            <a href="./contact" class="flex flex-col items-center">
                <x-service-graphics.reservation></x-service-graphics.reservation>
                <h3 class="text-xl font-medium text-center p-6 text-[#0f0f0f] dark:text-gray-100">Reservations</h3>
            </a>
            <a href="./contact" class="flex flex-col items-center">
                <x-service-graphics.delivery></x-service-graphics.delivery>
                <h3 class="text-xl font-medium text-center p-6 text-[#0f0f0f] dark:text-gray-100">Delivery Services</h3>
            </a>
        </div>
    </section>
    <hr class="mx-32 border-[#0f0f0f] dark:border-gray-100">
    <section class="my-10 flex flex-col items-center">
        <h1 class="text-5xl font-extrabold pt-10 text-center text-[#0f0f0f] dark:text-gray-100">CarzCo Membership</h1>
        <p class="text-lg font-extralight text-center px-32 py-6 text-[#0f0f0f] dark:text-gray-100">
            CarzCo membership provides premium perks that can be improve your experience with us, as well as our partners.
            These perks include discounts, expedited or tailored services, and occasional free products and services.
        </p>
        <a href="./contact">
            <x-primary-button>Learn More</x-primary-button>
        </a>
    </section>
    <hr class="mx-32 dark:border-[#0f0f0f] border-gray-100">
</x-app-layout>
