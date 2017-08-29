<img src="/resume/images/avatar.jpg" alt="avatar">
<h1 class="site-title">May LIU</h1>

<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
  <div class="nav-menu">
    <ul>
      <li>
        <a href="#/home">
          <i class="pe-7s-home"></i>@lang('blog.home')</a>
      </li>
      <li>
        <a href="#/about">
          <i class="pe-7s-user"></i>@lang('blog.aboutme')</a>
      </li>
      <li>
        <a href="#/resume">
          <i class="pe-7s-id"></i>@lang('blog.resume')</a>
      </li>
      <li>
        <a href="#/contact">
          <i class="pe-7s-call"></i>@lang('blog.contact')</a>
      </li>
    </ul>
  </div>
</nav>

<!-- header-bottom -->

<div class="header-bottom">
<div class="lang">
    {{-- language switch --}}
     @foreach (config('languages') as $lang => $language)
        @if ($lang != App::getLocale())
        <a href="{{ route('lang.switch', $lang) }}" class="nav-item is-tab is-success">{{$language}}</a>
        @endif
    @endforeach
</div>

  <!-- SOCIAL -->
  <ul class="social">
    <li>
      <a class="github" href="https://github.com/ashucn" target="_blank"></a>
    </li>
    <li>
      <a class="linkedin" href="https://www.linkedin.com/in/ashucn/" target="_blank"></a>
    </li>
  </ul>
  <!-- SOCIAL -->

  <!-- copy-text -->
  <div class="copy-text">
    <p>&copy; 2017 by May</p>
  </div>
  <!-- copy-text -->

</div>

<!-- header-bottom -->
