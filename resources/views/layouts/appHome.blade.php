<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://kit.fontawesome.com/8cf788678c.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=MonteCarlo&family=Parisienne&display=swap');
    </style>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.17.1/echo.js" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.12.15/paper-full.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script>
        document.documentElement.classList.add('js')
    </script>



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="overflow-hidden">
            @yield('content')
        </main>
    </div>

    <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
    <script src="../node_modules/flyonui/flyonui.js"></script>
    @stack('modals')
    @livewireScripts
</body>

</html>
