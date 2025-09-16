<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-900 text-slate-100">
        <div class=" w-full bg-slate-950/70 backdrop-blur-md shadow-lg min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div>

                <a href="/">
                    <img src="{{ asset('images/Job-star.png') }}" alt="Job Star" class="h-24 w-25 rounded">
                </a>
                <h1 class=" mt-2 text-purple-900" ><strong>Job Star</strong></h1>

            </div >

            <div class="  z-50  bg-slate-950/70 backdrop-blur-md text-white-500 shadow-lg  w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
