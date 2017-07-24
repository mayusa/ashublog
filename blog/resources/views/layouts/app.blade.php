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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      
      [v-cloak] { 
        display:none !important; 
      }
    </style>
</head>
<body>
    <div id="app" v-cloak>
    <nav class="nav has-shadow">
        <div class="container">
           <div class="nav-left">
               <a href="{{route('home')}}" class="nav-item">
                   <img src="{{asset('img/logo.png')}}" alt="placeholder+image">
               </a>
               <a class="nav-item is-tab m-l-10 is-hidden-mobile">
                   Page 1
               </a>
               <a class="nav-item is-tab m-l-10 is-hidden-mobile">
                  Page 2
               </a>
               <a class="nav-item is-tab m-l-10 is-hidden-mobile">
                  Page 3
               </a>
           </div>
           <div class="nav-right" style="overflow: visible;">
           {{-- language switch --}}
             @foreach (config('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                <a href="{{ route('lang.switch', $lang) }}" class="nav-item is-tab is-success">{{$language}}</a>
                @endif
            @endforeach
           {{-- /language switch --}}
               @if(Auth::guest())
                 @if(Request::path() !== 'login')
                  <a href="{{route('login')}}" class="nav-item is-tab">@lang('blog.signin')</a>
                 @endif
                 @if(Request::path() !== 'register')
                  <a href="{{route('register')}}" class="nav-item is-tab">@lang('blog.join')</a>
                 @endif
                 
               @else

                  <b-dropdown v-model="navigation" position="is-bottom-left">
                      <a class="nav-item" slot="trigger">
                      <span>
                          @lang('blog.hey')! <b class="is-ok">{{Auth::user()->name}}</b></span>
                          <b-icon icon="arrow_drop_down"></b-icon>
                      </a>
                      <b-dropdown-option value="home">
                          <b-icon icon="home"></b-icon>
                          @lang('blog.home')
                      </b-dropdown-option>
                      <b-dropdown-option value="blog">
                          <b-icon icon="art_track"></b-icon>
                           @lang('blog.blog')
                      </b-dropdown-option>
                      <b-dropdown-option separator></b-dropdown-option>
                      <b-dropdown-option value="settings">
                          <b-icon icon="settings"></b-icon>
                           @lang('blog.setting')
                      </b-dropdown-option>
                      <b-dropdown-option value="logout" @click="logout">
                          <b-icon icon="exit_to_app"></b-icon>  @lang('blog.logout')
                      </b-dropdown-option>
                  </b-dropdown>

               @endif
           </div>
        </div>
    </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
