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
  <title>Vex - Product Landing Page Boostarp Template</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Vex HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Vex HTML Template v1.0">

  <!-- ** Plugins Needed for the Project ** -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid&#43;Serif:400%7cJosefin&#43;Sans:300,400,600,700 ">
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
      <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('images/skin1004logo.png') }}" alt="Vex" width="100px">
      </a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navigation">
        <ul class="navbar-nav ml-auto mr-n0 mr-md-n3">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('pages/products') }}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('pages/blog') }}">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="tf-ion-chevron-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="{{ url('/blog-details') }}">Blog Details</a></li>
              <li><a class="dropdown-item" href="{{ url('/product-details') }}">Product Details</a></li>
              <li><a class="dropdown-item" href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
              <li><a class="dropdown-item" href="{{ url('/terms-conditions') }}">Terms Conditions</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/#testimonial') }}">Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('pages/contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mb-4 mb-md-0">
        <div class="sticky-image">
          <img class="img-fluid w-100" src="{{ asset('images/showcase/showcase-1.png') }}" alt="How to choose right watch for you.">
        </div>
      </div>
      <div class="col-lg-6 col-md-7 offset-lg-1">
        <h1 class="mb-4">How to choose right watch for you.</h1>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<footer>
  <div class="container text-center">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <a href="{{ url('/') }}" class="mb-4 d-inline-block"> <img src="{{ asset('images/logo.png') }}" alt="Vex" width="100px"> </a>
          <ul class="list-inline footer-menu">
            <li class="list-inline-item">
              <a href="{{ url('pages/blog') }}">Blog</a>
            </li>
            <li class="list-inline-item">
              <a href="{{ url('pages/contact') }}">Contact</a>
            </li>
            <li class="list-inline-item">
              <a href="{{ url('pages/terms-conditions') }}">Terms & Conditions</a>
            </li>
            <li class="list-inline-item">
              <a href="{{ url('pages/privacy-policy') }}">Privacy Policy</a>
            </li>
          </ul>
          <p class="copyright-text">Copyright &copy; 2021, Designed & Developed By <a href="https://themefisher.com/">Themefisher</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>
</html>