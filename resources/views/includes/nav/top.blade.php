<?php
$url = Request::route()->getName();
?>
<nav class="navbar has-shadow">
  <div class="navbar-brand">
     <a href="{{route('home')}}" class="nav-item">
         <img src="{{asset('img/logo.png')}}" alt="placeholder+image">
     </a>

    <a class="navbar-item is-hidden-desktop" href="https://github.com/ashucn/ashublog" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fa fa-github"></i>
      </span>
    </a>

    <a class="navbar-item is-hidden-desktop" href="https://twitter.com/ashucn" target="_blank">
      <span class="icon" style="color: #55acee;">
        <i class="fa fa-twitter"></i>
      </span>
    </a>

    <div class="navbar-burger burger" data-target="navMenuTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenuTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item " href="/">
        Home
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link " href="http://blog.ashucn.us">
          Blog
        </a>
        <div id="blogDropdown" class="navbar-dropdown is-boxed" data-style="width: 18rem;">

            <a class="navbar-item" href="/2017/07/24/access-previous-bulma-versions/">
              <div class="navbar-content">
                <p>
                  <small class="has-text-info">24 Jul 2017</small>
                </p>
                <p>Access previous Bulma versions</p>
              </div>
            </a>

            <a class="navbar-item" href="/2017/03/10/new-field-element/">
              <div class="navbar-content">
                <p>
                  <small class="has-text-info">10 Mar 2017</small>
                </p>
                <p>New field element (for better controls)</p>
              </div>
            </a>

            <a class="navbar-item" href="/2016/04/11/metro-ui-css-grid-with-bulma-tiles/">
              <div class="navbar-content">
                <p>
                  <small class="has-text-info">11 Apr 2016</small>
                </p>
                <p>Metro UI CSS grid with Bulma tiles</p>
              </div>
            </a>

          <a class="navbar-item" href="/">
            More posts
          </a>
          <hr class="navbar-divider">
          <div class="navbar-item">
            <div class="navbar-content">
              <div class="level is-mobile">
                <div class="level-left">
                  <div class="level-item">
                    <strong>Stay up to date!</strong>
                  </div>
                </div>
                <div class="level-right">
                  <div class="level-item">
                    <a class="button is-rss is-small" href="http://bulma.io/atom.xml">
                      <span class="icon is-small">
                        <i class="fa fa-rss"></i>
                      </span>
                      <span>Subscribe</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-item has-dropdown is-hoverable">
        <div class="navbar-link">
          More
        </div>
        <div id="moreDropdown" class="navbar-dropdown is-boxed">
          <a class="navbar-item " href="/">
            <div class="level is-mobile">
              <div class="level-left">
                <div class="level-item">
                  <p>
                    <strong>Extensions</strong>
                    <br>
                    <small>Side projects to enhance Bulma</small>
                  </p>
                </div>
              </div>
              <div class="level-right">
                <div class="level-item">
                  <span class="icon has-text-info">
                    <i class="fa fa-plug"></i>
                  </span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <a class="navbar-item" href="https://github.com/ashucn/ashublog" target="_blank">
        Github
      </a>
      {{-- language switch --}}
       @foreach (config('languages') as $lang => $language)
          @if ($lang != App::getLocale())
          <a href="{{ route('lang.switch', $lang) }}" class="nav-item is-tab is-success">{{$language}}</a>
          @endif
      @endforeach
      <div class="navbar-item">
      @if(Auth::guest())
         @if(Request::path() !== 'login')
          <a href="{{route('login')}}" class="nav-item is-tab">@lang('blog.signin')</a>
         @endif
         @if(Request::path() !== 'register')
          <a href="{{route('register')}}" class="nav-item is-tab">@lang('blog.join')</a>
         @endif

       @else

      <div class="navbar-item has-dropdown is-hoverable is-right" >
        <a class="navbar-link  is-active" href="">
          <b class="is-ok is-desktop">{{Auth::user()->name}}</b></span>
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item @if(Request::is('/')) is-active @endif" href="{{route('home')}}">
             <b-icon icon="home"></b-icon> @lang('blog.home')
          </a>
          <a class="navbar-item @if(Request::is('user/*')) is-active @endif" href="{{route('user.profile', Auth::user()->name)}}">
             <b-icon icon="person"></b-icon> @lang('blog.profile')
          </a>
          <a class="navbar-item " href="">
            <b-icon icon="art_track"></b-icon> @lang('blog.blog')
          </a>
          @if(Auth::user()->is_admin)
          <hr class="navbar-divider">
          <a class="navbar-item @if(Request::is('manage/dashboard')) is-active @endif" href="{{route('manage.dashboard')}}">
             <b-icon icon="settings"></b-icon> @lang('blog.setting')
          </a>
          @endif
          <a class="navbar-item " href="" @click="logout">
            <b-icon icon="exit_to_app"></b-icon>  @lang('blog.logout')
          </a>
        </div>
      </div>

       @endif
      </div>
    </div>
  </div>
</nav>
