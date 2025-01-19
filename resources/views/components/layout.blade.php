<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>CarzCo | Exotic Car Rental Website</title>
</head>
<body>
    <nav>
        <img src="assets/logos/logo_main.svg" class="logo">
        <div class="nav-links">
            <a href="./fleet" class="f-color-white">OUR FLEET</a>
            <a href="./services" class="f-color-white">SERVICES</a>
            <a href="./about" class="f-color-white">ABOUT</a>
        </div>
    </nav>
    {{ $slot }}
</body>
</html>
