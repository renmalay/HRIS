<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HRIS') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    @livewireStyles

    <link rel="stylesheet" href="{{ asset('/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" type="text/css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('/js/sidebar.js') }}"></script>
    {{-- <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <div id="app">
        <x-sidebar />
        <section class="home-section">
            <div class="home-content">
                <i class='bx bx-menu'></i>
                <span id="pageName"></span>
            </div>
            <main class="px-3">
                @yield('content')
            </main>
        </section>
    </div>
    @livewireScripts
</body>

</html>
