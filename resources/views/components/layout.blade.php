<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>CarzCo | Exotic Car Rental Website</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
</head>
<body>
    <nav>
        <a href="./"><img src="./images/logo_main.svg" class="logo"></a>
        <div class="nav-links">
            <a href="./fleet" class="f-color-white f-size-md">Our Fleet</a>
            <a href="./services" class="f-color-white f-size-md">Services</a>
            <a href="./about" class="f-color-white f-size-md">About</a>
        </div>
    </nav>
    {{ $slot }}
    <footer>
        <div class="footer-main mb-lg">
            <img src="./images/logo_main.svg" class="logo-xl">
            <div class="footer-nav-links">
                <div class="footer-columns">
                    <h6 class="f-size-md f-color-white mb-sm">CarzCo</h6>
                    <a href="./" class="f-size-md f-weight-light f-color-white">Our Fleet</a>
                    <a href="./" class="f-size-md f-weight-light f-color-white">Services</a>
                    <a href="./" class="f-size-md f-weight-light f-color-white">About Us</a>
                    <a href="./" class="f-size-md f-weight-light f-color-white">Contact Us</a>
                </div>
                <div class="footer-columns">
                    <h6 class="f-size-md f-color-white mb-sm">Popular Brands</h6>
                    <a href="./" class="f-size-md f-weight-light f-color-white">Lamborghini</a>
                    <a href="./" class="f-size-md f-weight-light f-color-white">Rolls Royce</a>
                    <a href="./" class="f-size-md f-weight-light f-color-white">Ferrari</a>
                    <a href="./" class="f-size-md f-weight-light f-color-white">Porsche</a>
                    <a href="./" class="f-size-md f-weight-light f-color-white">McLaren</a>
                </div>
                <div class="footer-columns">
                    <h6 class="f-size-md f-color-white mb-sm">Services</h6>
                    <a href="./" class="f-size-md f-weight-light f-color-white">Chauffeur Service</a>
                    <a href="./" class="f-size-md f-weight-light f-color-white">Reservations</a>
                    <a href="./" class="f-size-md f-weight-light f-color-white">Events</a>
                    <a href="./" class="f-size-md f-weight-light f-color-white">CarzCo Memberships</a>
                </div>
            </div>
        </div>
        <p class="f-size-xs f-color-white">Copyright 2025, CarzCo LLC.</p>
    </footer>
</body>
</html>
