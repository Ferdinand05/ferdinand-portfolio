<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>{{ $title }}</title>
    <script src="\assets\ckeditor5\ckeditor.js"></script>
    <script src="\assets\jquery\jquery.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class=" font-inter ">



    @include('layouts.navbar')

    <main>


        {{ $slot }}

    </main>



    <footer class="border border-t">
        @include('layouts.footer')
    </footer>

    {{-- ckeditor5 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
