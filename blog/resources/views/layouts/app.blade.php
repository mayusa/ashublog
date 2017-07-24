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
</head>
<body>
    <div id="app">
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
                <button class="dropdown nav-item is-tab is-aligned-right">
                    Hey {{Auth::user()->name}} <span class="icon"><i class="fa fa-caret-down"></i></span>
                    <ul class="dropdown-menu">
                        <li><a href=""><span class="icon"><i class="fa fa-user-circle-o"></i></span> Profile</a></li>
                        <li><a href=""><span class="icon"><i class="fa fa-envelope"></i></span> Message</a></li>
                        <li><a href=""><span class="icon"><i class="fa fa-gear"></i></span> Setting</a></li>
                        <li class="seperator"></li>
                        <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <span class="icon"><i class="fa fa-times"></i></span> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                        </li>
                    </ul>
                </button>
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
