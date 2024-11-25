<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Vex - Product Landing Page Bootstrap Template</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Vex HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Vex HTML Template v1.0">

  <!-- ** Plugins Needed for the Project ** -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400|Josefin+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/themefisher-font/themefisher-font.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.min.css') }}">

  <!-- Stylesheets -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!--Favicon-->
  <link rel="icon" href="{{ asset('images/skin1004logo.png') }}" type="image/x-icon">

</head>
<body id="body">

<!-- preloader start -->
<div class="preloader"></div>
<!-- preloader end -->

<header class="navigation sticky-top bg-white">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('images/skin1004logo.png') }}" alt="Vex" width="100px"></a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navigation">
        <ul class="navbar-nav ml-auto mr-n0 mr-md-n3">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('pages/products') }}">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('pages/blog') }}">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('pages/contact') }}">Contact</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<section class="feature-list section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h1>Our Latest Post</h1>
      </div>
    </div>

    <!-- Post 1 -->
    <div class="row mb-40">
      <div class="col-md-6 text-center mb-5 mb-lg-0">
        <img class="img-fluid" src="{{ asset('images/ampoule.png') }}" alt="">
      </div>
      <div class="col-md-6 align-self-center text-center text-md-left">
        <div class="content">
          <h4 class="subheading"><a class="link-title" href="{{ url('pages/blog-details') }}">Best Facial Product In Your Budget</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="{{ url('/blog-details') }}" class="btn btn-main btn-main-sm">Read More</a>
        </div>
      </div>
    </div>

    <!-- Post 2 -->
    <div class="row mb-40">
      <div class="col-md-6 order-md-1 order-2 align-self-center text-center text-md-left">
        <div class="content">
          <h4 class="subheading"><a class="link-title" href="{{ url('pages/blog-details') }}">How to choose right facial product for you.</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="{{ url('/blog-details') }}" class="btn btn-main btn-main-sm">Read More</a>
        </div>
      </div>
      <div class="col-md-6 order-md-2 order-1 text-center mb-5 mb-lg-0">
        <img class="img-fluid" src="{{ asset('images/soothingcream.png') }}" alt="">
      </div>
    </div>
  </div>
</section>

<script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

<footer>
  <div class="container text-center">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <a href="{{ url('/') }}" class="mb-4 d-inline-block"> <img src="{{ asset('images/skin1004logo.png') }}" alt="Vex" width="100px"> </a>
          <ul class="list-inline footer-menu">
            <li class="list-inline-item"><a href="{{ url('pages/blog') }}">Blog</a></li>
            <li class="list-inline-item"><a href="{{ url('pages/contact') }}">Contact</a></li>
            <li class="list-inline-item"><a href="{{ url('pages/terms') }}">Terms &amp; Conditions</a></li>
            <li class="list-inline-item"><a href="{{ url('pages/privacy-policy') }}">Privacy Policy</a></li>
          </ul>
          <p class="copyright-text">Copyright &copy; {{ date('Y') }}, Designed &amp; Developed By <a href="https://themefisher.com/">Themefisher</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>
