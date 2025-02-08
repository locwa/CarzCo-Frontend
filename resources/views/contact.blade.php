<x-app-layout>
    <x-slot:title>Contact Us | CarzCo</x-slot:title>
    <h1 class="text-5xl text-center font-extrabold pt-20">Get in Touch With Us</h1>
    <p class="text-center pb-20">Feel free to get in touch with us using the form below. Once received, we will try to assist you and arrange for your exotic car or service</p>
    <div class="flex flex-col items-center justify-center">
        <x-contact-window size="xl" class="flex flex-col items-center">
            <x-slot:header>Contact Us</x-slot:header>
        </x-contact-window>
    </div>
</x-app-layout>
