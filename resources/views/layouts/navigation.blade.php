<nav class="flex justify-between p-4 items-center">
    <a href="{{ route('home') }}"><x-carzco-logo></x-carzco-logo></a>
    <div class="flex gap-10 mr-6">
        <a href="{{route('fleet')}}" class="text-[#0f0f0f] dark:text-gray-100 text-lg hover:text-gray-400">Our Fleet</a>
        <a href="{{route('services')}}" class="text-[#0f0f0f] dark:text-gray-100 text-lg hover:text-gray-400">Services</a>
        <a href="{{route('about')}}" class="text-[#0f0f0f] dark:text-gray-100 text-lg hover:text-gray-400">About</a>
    </div>
</nav>
