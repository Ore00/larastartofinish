<html>
    <head>
        <title>{{ env('APP_NAME') }} - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

    </head>
    <body>
        @include('layouts.header')
        <div class="container">
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <br>
        @include('layouts.footer')
    </body>
</html>

