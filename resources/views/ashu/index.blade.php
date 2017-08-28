<!DOCTYPE html>
<html lang="en" class="no-js one-page-layout" data-mobile-classic-layout="false" data-classic-layout="false"
      data-prev-animation="16" data-next-animation="15" data-random-animation="false">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="May's Online Resume">
  <meta name="keywords" content="Ashucn, May Liu, Resume, portfolio">
  <meta name="author" content="May">
  <title>May's Resume</title>
  <!-- FAV and TOUCH ICONS -->
  <link rel="shortcut icon" href="/resume/images/avatar.jpg">
  <link rel="apple-touch-icon" href="/resume/images/avatar.jpg"/>
  <!-- FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic' rel='stylesheet'
        type='text/css'>
  <!-- STYLES -->
  <link rel="stylesheet" type="text/css" href="/resume/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/resume/css/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="/resume/css/fonts/fontello/css/fontello.css">
  <link rel="stylesheet" type="text/css" href="/resume/js/nprogress/nprogress.css">
  <link rel="stylesheet" type="text/css" href="/resume/js/jquery.magnific-popup/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="/resume/js/jquery.uniform/uniform.default.css">
  <link rel="stylesheet" type="text/css" href="/resume/css/animations.css">
  <link rel="stylesheet" type="text/css" href="{{mix('/resume/css/align.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{mix('/resume/css/main.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{mix('/resume/css/768.min.css')}}">

  <!-- INITIAL SCRIPTS -->
  <script src="/resume/js/jquery-1.12.1.min.js"></script>
  <script src="/resume/js/jquery-migrate-1.2.1.min.js"></script>
  <script src="/resume/js/modernizr.min.js"></script>
  <!--[if lt IE 9]>
  <script src="/resume/js/ie.js"></script>
  <![endif]-->
</head>
<body>
<!-- PAGE -->
<div id="page" class="hfeed site">
  <!-- HEADER -->
  <header id="masthead" class="header" role="banner">
    <a class="menu-toggle toggle-link"></a>
    <h1 class="site-title mobile-title">JACK ALLEN</h1>
    <!-- header-wrap -->
    <div class="header-wrap">
      <!-- NAV MENU -->
    @include('includes.resume.nav')
    <!-- NAV MENU -->

    </div>
  </header>

  <!-- .site-main -->
  <div id="main" class="site-main">
    <!-- PAGE : HOME -->
    @include('includes.resume.home')
    <!-- PAGE : ABOUT -->
    @include('includes.resume.about')
    <!-- PAGE : RESUME -->
    @include('includes.resume.resume')
    <!-- PAGE : CONTACT -->
   @include('includes.resume.contact')
  </div>
  <!--/ .site-main -->

</div>
<!--/ PAGE -->

<!-- PORTFOLIO SINGLE AJAX CONTENT CONTAINER -->
{{-- <div class="p-overlay"></div>
<div class="p-overlay"></div> --}}

<!-- ALERT : used for contact form mail delivery alert -->
<div class="site-alert animated"></div>

<!-- SCRIPTS -->
<script src="/resume/js/jquery.address-1.5.min.js"></script>
<script src="/resume/js/nprogress/nprogress.js"></script>
<script src="/resume/js/fastclick.js"></script>
<script src="/resume/js/typist.js"></script>
<script src="/resume/js/imagesloaded.pkgd.min.js"></script>

<script src="/resume/js/jquery.isotope.min.js"></script>
<script src="/resume/js/jquery.fitvids.js"></script>
<script src="/resume/js/jquery.validate.min.js"></script>
<script src="/resume/js/jquery.uniform/jquery.uniform.min.js"></script>
<script src="/resume/js/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

<script src="/resume/js/socialstream.jquery.js"></script>
<script src="/resume/js/jarallax.min.js"></script>
<script src="/resume/js/jarallax-video.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNQaIjvsoKuOyhDjx_OnOWV7fHxhO9C4U"></script>
<script src="/resume/js/main.js"></script>
{{-- <script src="{{mix('/resume/js/main.js')}}"></script> --}}

</body>
</html>
