<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- vite dependency --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- gfonts dependency --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    {{-- Fontawesome icon CDN --}}
    <script src="https://kit.fontawesome.com/bfb24335ca.js" crossorigin="anonymous"></script>

    <title>{{ __(@$pageTitle) }} - {{ get_app_name() }}</title>
</head>

<body>

    <section class="antialiased">
        @yield('content')
    </section>

</body>

</html>
