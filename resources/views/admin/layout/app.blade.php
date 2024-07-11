<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- vite dependency --}}
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/data-table.js'])

    {{-- gfonts dependency --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    {{-- Fontawesome icon CDN --}}
    <script src="https://kit.fontawesome.com/bfb24335ca.js" crossorigin="anonymous"></script>

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- DataTable --}}
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.3/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/dt/dt-2.0.3/datatables.min.js"></script>

    {{-- Memuat source WYSIWYG ckeditor5 --}}
    <script src="{{ asset('assets/vendor/ckeditor5/build/ckeditor.js') }}"></script>

    <title>{{ __(@$pageTitle) }} - {{ get_app_name() }}</title>
</head>

<body>

    <section class="antialiased">
        @yield('content')
    </section>

    @stack('script')
</body>

</html>
