<nav class="flex justify-between p-4 items-center">
    <a href="{{ route('home') }}"><x-carzco-logo></x-carzco-logo></a>

    <div class="gap-10 mr-6 md:flex hidden">
        <x-nav-links href="{{route('fleet')}}">Our Fleet</x-nav-links>
        <x-nav-links href="{{route('services')}}">Services</x-nav-links>
        <x-nav-links href="{{route('about')}}">About</x-nav-links>
    </div>

    <!-- Mobile nav links -->
    <div class="md:hidden h-20">
        <button class="h-full" id="navButton" onclick="navMenuControls()">
            <x-menu-burger></x-menu-burger>
        </button>
    </div>
</nav>
<div class="md:hidden text-[#0f0f0f] dark:text-gray-100 bg-gray-300 dark:bg-[#1f1f1f] flex-col" id="navMenu" style="display: none">
    <x-nav-links class="py-2 px-4" href="{{route('fleet')}}">Our Fleet</x-nav-links>
    <x-nav-links class="py-2 px-4" href="{{route('services')}}">Services</x-nav-links>
    <x-nav-links class="py-2 px-4" href="{{route('about')}}">About</x-nav-links>
</div>

<script>

    function navMenuControls() {
        let dropdown = document.getElementById("navMenu");
        if (dropdown.style.display === "none"){
            dropdown.style.display = "flex"
        } else {
            dropdown.style.display = "none"
        }
    }

</script>
