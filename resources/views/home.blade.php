<x-layout>
    <header class="hero">
        <div class="heading">
            <h1 class="f-color-white f-size-xl">Rent Exotic and Luxury Cars</h1>
            <p class="f-color-white f-size-md f-weight-light mt-sm">Discover our fleet</p>
        </div>
        <div class="hero-spacer"></div>
        <input type="text" name="vehicle-search" id="vehicleSearch" class="vehicle-search f-size-sm f-color-white" placeholder="Search by Make or Model" >
    </header>
    <main>
        <section class="p-md">
            <h1 class="f-size-lg mt-lg">At CarzCo, We Provide Top Quality Exotic and Luxury Cars for Rent</h1>
            <p class="f-size-md f-weight-light mt-sm">We always provide a variety of Exotic and Luxury cars that are in Top Shape and a Reasonable Price</p>
        </section>
        <hr class="mt-lg mb-lg">
        <section class="brands p-md">
            <h1 class="f-size-lg mt-lg">Popular Exotic and Luxury Car Brands</h1>
            <p class="f-size-md f-weight-light mt-sm mb-lg">Discover some of the most popular brands that we carry</p>
            <div class="brand-logos">
                <a href="" class="home-brand-logos">
                    <img src="./images/brand_logos/Rolls_Royce.svg" alt="Rolls-Royce Logo" class="logo-xl mb-lg ml-xl">
                </a>
                <a href="" class="home-brand-logos">
                    <img src="./images/brand_logos/Ferrari.svg" alt="Ferrari Logo" class="logo-xl mb-lg ml-xl">
                </a>
                <a href="" class="home-brand-logos">
                    <img src="./images/brand_logos/Bentley.svg" alt="Bentley Logo" class="logo-xl mb-lg ml-xl">
                </a>
                <br>
                <a href="" class="home-brand-logos">
                    <img src="./images/brand_logos/Lamborghini.svg" alt="Lamborghini Logo" class="logo-xl mb-lg ml-xl">
                </a>
                <a href="" class="home-brand-logos">
                    <img src="./images/brand_logos/McLaren.svg" alt="Mclaren Logo" class="logo-xl mb-lg ml-xl">
                </a>
                <a href="" class="home-brand-logos">
                    <img src="./images/brand_logos/Porsche.svg" alt="Porsche Logo" class="logo-xl mb-lg ml-xl">
                </a>
            </div>
        </section>
        <hr class="mb-lg">
        <section class="services-container p-md">
            <h1 class="f-size-lg mt-sm mb-lg">Services That We Offer</h1>
            <div class="services">
                <a href="./">
                    <img src="./images/service_graphics/chauffeur.svg" alt="chauffeur logo" class="logo-md mb-sm">
                    <h3>Chauffeur Services</h3>
                </a>
                <a href="./">
                    <img src="./images/service_graphics/reservation.svg" alt="reservation logo" class="logo-md mb-sm">
                    <h3>Reservations</h3>
                </a>
                <a href="./">
                    <img src="./images/service_graphics/delivery.svg" alt="delivery logo" class="logo-md mb-sm">
                    <h3>Delivery Services</h3>
                </a>
            </div>
        </section>
        <section class="bg-black mt-lg f-color-white p-xl">
            <h1 class="f-size-lg mb-md">CarzCo Membership</h1>
            <p class="f-weight-light f-size-md mb-md">
                CarzCo membership provides premium perks that can be improve your experience with us, as well as our partners.
                These perks include discounts, expedited or tailored services, and occasional free products and services.
            </p>
            <x-buttons :isLink="true" linkTo="./contact" class="button-white" height="md" width="lg">Learn More</x-buttons>
        </section>
    </main>
</x-layout>
