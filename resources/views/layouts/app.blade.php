<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bs__dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- The at-yield below is used to include variables not whole sections  --}}
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <noscript>
        <META HTTP-EQUIV="Refresh" CONTENT="0;https://www.enable-javascript.com/">
    </noscript>
    {{-- For including header from the includes folder  --}}
    @include('layouts.includes.header')
    <main>
        @section('main-content')
        @show
    </main>

    {{-- For including the footer from the includes folder  --}}
    @include('layouts.includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @yield('styles')
    <script src="{{ asset('js/min.js') }}"></script>
    @yield('scripts')
</body>

</html>
