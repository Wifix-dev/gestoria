<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<x-menu></x-menu>

    <!-- component -->
    <div class="relative lg:flex justify-center items-center h-screen mt-0">
        <!-- Left: Image -->
        <div class="w-full lg:w-1/2 h-screen lg:block absolute lg:relative z-0 -mt-[230px] lg:mt-0 -pb-32 lg:pb-0">
            <x-img-logreg class="bg-[url('public/assets/img/help.jpg')] object-cover bg-cover bg-no-repeat bg-center w-full h-full " />
        </div>

        <!-- Right: Login Form -->
        <div class="lg:p-12 relative md:p-52  sm:20 p-8 pb-32 w-full lg:w-1/2 bg-white z-10 mt-[200px] lg:mt-0">
            {{ $slot }}
        </div>
    </div>

</body>

</html>
