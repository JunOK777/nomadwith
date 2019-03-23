<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    @if( isset($noFrame) && $noFrame == true )

      @if( isset($header) && $header == true && isset($footer) && $footer == true )
        @include('layouts._header')
        @yield('content')
        @include('layouts.footer')
      @else
        @yield('content')
      @endif

    @else
        @include('layouts.frame')
    @endif
  </div>
  @include('layouts.scripts')
</body>
</html>
