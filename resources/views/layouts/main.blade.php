<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

  <title>@yield('title')</title>
</head>
<body>

  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')

  <script type="text/javascript" src="{{ asset('/js/app.js')}}"></script>
</body>
</html>
