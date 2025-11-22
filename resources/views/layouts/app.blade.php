<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="theme-color" content="#1B4DFF" />

    <!-- Favicon -->
    <link rel="icon" href="./assets/images/logos/company.svg" />
    <link rel="apple-touch-icon" href="./assets/images/logos/company.svg" />

    <!-- Preload key resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin />

    <!-- Stylesheets -->
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Bookies | Home</title>
</head>

<body>
    <main
        class="relative mx-auto w-full max-w-[640px] overflow-hidden min-h-screen pt-[40px] pb-[43px] flex flex-col gap-[30px] bg-white">
        @yield('content')
    </main>
</body>

</html>
