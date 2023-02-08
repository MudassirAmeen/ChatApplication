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

        {{--  Live Wire Style  --}}
        @livewireStyles

        {{--  {{--  Front End Custom Links and Scripts  --}}
        <link href="{{asset('build/bootstrap-5.2.2-dist/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
        <link href="{{asset('build/bootstrap-5.2.2-dist/css/custom-style.css')}}" rel="stylesheet" id="bootstrap-css">
        <link href="{{asset('build/bootstrap-5.2.2-dist/css/responsive.css')}}" rel="stylesheet" id="bootstrap-css">
        <script scr="{{asset('build/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js')}}"></script>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        {{--  Livewire Scripts  --}}
        @livewireScripts
    </body>
</html>
