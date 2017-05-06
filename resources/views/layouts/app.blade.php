<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Plan </title>

    <!-- Styles -->
    @include('layouts.partials.stylelinks')
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div class='ontainer-fluid col-md-10 col-md-offset-1'>
      @if(Auth::guest())
        @include('layouts.nav.guest')
      @else
        @include('layouts.nav.auth')
      @endif
    </div>

    <div class="container">
      @yield('content')
      @if($flash = session('message'))
            @include('layouts.partials.flash')
      @endif
    </div>
    @include('layouts.partials.footer')
    <!-- Scripts -->
    @include('layouts.partials.scriptlinks')
</body>
</html>
