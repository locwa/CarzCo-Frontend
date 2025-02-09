<footer class="px-20 pt-10 pb-5">
    <div class="flex justify-between">
        <x-carzco-logo></x-carzco-logo>
        <div class="flex gap-20">
            <div class="flex flex-col text-[#0f0f0f] dark:text-gray-100">
                <h6 class="text-3xl font-extrabold pb-2">CarzCo</h6>
                <a href="{{route('fleet')}}" class="text-xl py-1 hover:text-gray-400">Our Fleet</a>
                <a href="{{route('services')}}" class="text-xl py-1 hover:text-gray-400">Services</a>
                <a href="{{route('about')}}" class="text-xl py-1 hover:text-gray-400">About Us</a>
                <a href="{{route('contact')}}" class="text-xl py-1 hover:text-gray-400">Contact Us</a>
            </div>
            <div class="flex flex-col text-[#0f0f0f] dark:text-gray-100">
                <h6 class="text-3xl font-extrabold pb-2">Socials</h6>
                <a href="./" class="text-xl py-1 hover:text-gray-400">Facebook</a>
                <a href="./" class="text-xl py-1 hover:text-gray-400">Instagram</a>
                <a href="./" class="text-xl py-1 hover:text-gray-400">Youtube</a>
                <a href="./" class="text-xl py-1 hover:text-gray-400">Linkedin</a>
            </div>
            <div class="flex flex-col text-[#0f0f0f] dark:text-gray-100">
                <h6 class="text-3xl font-extrabold pb-2">Popular Brands</h6>
                <a href="{{ route('fleet.filter', ['id' => 'lamborghini']) }}" class="text-xl py-1 hover:text-gray-400">Lamborghini</a>
                <a href="{{ route('fleet.filter', ['id' => 'rolls-royce']) }}" class="text-xl py-1 hover:text-gray-400">Rolls Royce</a>
                <a href="{{ route('fleet.filter', ['id' => 'ferrari']) }}" class="text-xl py-1 hover:text-gray-400">Ferrari</a>
                <a href="{{ route('fleet.filter', ['id' => 'porsche']) }}" class="text-xl py-1 hover:text-gray-400">Porsche</a>
                <a href="{{ route('fleet.filter', ['id' => 'mclaren']) }}" class="text-xl py-1 hover:text-gray-400">McLaren</a>
            </div>
        </div>
    </div>
    <p class="text-xs text-[#0f0f0f] dark:text-gray-100 text-center pt-8">Copyright statement here</p>
</footer>
