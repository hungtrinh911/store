<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        @include('fontEnd.css')
        @yield('css')
    </head>
    <body>
      @include('fontEnd.header')
      @yield('content')
      @include('fontEnd.footer')
    </body>
    @include('fontEnd.js')
    @yield('js')
</html>