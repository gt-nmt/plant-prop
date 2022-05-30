<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
{{--            @include('layouts.navigation')--}}

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main class="min-h-screen">
                {{ $slot }}
            </main>
            <footer class="bg-white shadow grid grid-cols-2 sticky">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <p class="text-sm text-slate-700">
                        &copy;2022 Georgia and Jon-Luke<br>
                        All rights reserved
                    </p>
                </div>
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <p class="text-bold text-md text-slate-700">Links</p>

                    <ul class="list-none text-sm  text-slate-700">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Batches</a></li>
                        <li><a href="#">Plants</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </body>
</html>
