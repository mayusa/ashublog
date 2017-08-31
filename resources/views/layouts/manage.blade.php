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
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    [v-cloak] {
      display: none !important;
    }
  </style>
  @yield('styles')
</head>
<body>
<div id="app" v-cloak>
  @include('includes.nav.top')
  <div class="columns">
    <div class="column is-one-quarter">
      @include('includes.nav.sidemanage')
    </div>
    <div class="column m-r-30  m-l-20">
      @yield('content')
    </div>
  </div>

</div>
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
