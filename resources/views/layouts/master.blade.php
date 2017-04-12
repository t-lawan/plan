<!DOCTYPE html>
<html>
<head>
<title> Plan - @yield('title')</title>
@include('layouts.stylelinks')
</head>

<body>
  @if (Route::has('login'))
      @include('layouts.nav')
  @endif
<div class='container' >
  @yield('content')
</div>




</body>
</html>
