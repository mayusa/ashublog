<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ashu Blog') }}</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
      [v-cloak] { 
        display:none !important; 
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
            <div class="column is-3 is-centered">
                right nav
            </div>
        </div>
        @include('includes.nav.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
