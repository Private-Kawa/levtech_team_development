<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header>
                    <div class="container max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="container mx-auto px-4 max-w-7xl sm:px-6 lg:px-8 min-h-screen ">
                
                {{ $slot }}
                
            </main>
            <footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 おあとがよろしいようで All Rights Reserved.
                </span>
                <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="/" class="mr-4 pb-4 hover:underline md:mr-6 ">Home</a>
                    </li>
                    <li>
                        <a href="/posts/create" class="mr-4 hover:underline md:mr-6">新規追加</a>
                    </li>
                </ul>
            </footer>
        </div>
    </body>
</html>
