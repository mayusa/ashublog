<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Ashu Blog') }}</title>

  @include('includes.csrf-token-js')
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <style>
    [v-cloak] {
      display: none !important;
    }
  </style>
</head>
<body>
<div id="app" v-cloak>
  @include('includes.nav.top')
  <div class="columns is-multiline m-t-30 m-b-30 m-l-30 m-r-30">
    <div class="column is-9">
      @yield('content')
    </div>
    @include('includes.nav.blog-nav-right')
  </div>
  @include('includes.nav.footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            navigation: 'home',
        },
        methods: {
            gotoUrl: window.gotoUrl,
            logout: window.logout
        }
    });
</script>
</body>
</html>
