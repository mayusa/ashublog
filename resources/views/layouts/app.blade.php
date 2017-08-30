<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Ashu Blog') }}</title>

  {{-- @include('includes.csrf-token-js') --}}

  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  @yield('styles')
  <style>
    [v-cloak] {
      display: none !important;
    }
  </style>
</head>
<body>
<div id="app" v-cloak>
  @include('includes.nav.top')
  @yield('content')
  @include('includes.nav.footer')
</div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
<script>
    var app = new Vue({
        el: '#app'
    });
</script>
</body>
</html>
