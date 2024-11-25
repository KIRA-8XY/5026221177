<!DOCTYPE html>
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

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('images/skin1004logo.png') }}" type="image/x-icon">
</head>
<body id="body">

<!-- Preloader Start -->
<div class="preloader"></div>
<!-- Preloader End -->

<header class="navigation sticky-top bg-white">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{ asset('images/skin1004logo.png') }}" alt="Vex" width="100px">
      </a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navigation">
        <ul class="navbar-nav ml-auto mr-n0 mr-md-n3">
          <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="tf-ion-chevron-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="{{ route('blog-details') }}">Blog Details</a></li>
              <li><a class="dropdown-item" href="{{ route('product-details') }}">Product Details</a></li>
              <li><a class="dropdown-item" href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
              <li><a class="dropdown-item" href="{{ route('terms-conditions') }}">Terms Conditions</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#testimonial">Review</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mb-4 mb-md-0">
        <div class="product-image-slider">
          <div data-image="{{ asset('images/showcase/showcase-1.png') }}">
            <img class="img-fluid w-100" src="{{ asset('images/showcase/showcase-1.png') }}" alt="product-image">
          </div>
          <div data-image="{{ asset('images/showcase/showcase-2.png') }}">
            <img class="img-fluid w-100" src="{{ asset('images/showcase/showcase-2.png') }}" alt="product-image">
          </div>
          <div data-image="{{ asset('images/showcase/showcase-3.png') }}">
            <img class="img-fluid w-100" src="{{ asset('images/showcase/showcase-3.png') }}" alt="product-image">
          </div>
          <div data-image="{{ asset('images/showcase/showcase-4.png') }}">
            <img class="img-fluid w-100" src="{{ asset('images/showcase/showcase-4.png') }}" alt="product-image">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-7 offset-lg-1">
        <h1 class="mb-4">Apple Watch</h1>
        <p><strong>Colors: </strong>Black, White, Gray</p>
        <p><strong>Sizes: </strong>Small, Medium, Large</p>
        <p class="price py-4">$25.00 <s class="price">$30.00</s></p>
        <button class="snipcart-add-item btn btn-main mb-5" data-item-id="apple-watch__25.00"
          data-item-name="Apple Watch" data-item-image="{{ asset('images/showcase/showcase-1.png') }}" data-item-price="25.00"
          data-item-url="{{ route('product-details') }}" data-item-custom1-name="Choose Color"
          data-item-custom1-options="Black|White|Gray" data-item-custom2-name="Choose Size"
          data-item-custom2-options="Small|Medium|Large">Add to Cart</button>
        <div class="content">
          <p>Apple Watch is a line of smartwatches produced by Apple Inc. It incorporates fitness tracking and
            health-oriented capabilities with integration with iOS and other Apple products and services.</p>
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
          <a href="{{ route('index') }}" class="mb-4 d-inline-block">
            <img src="{{ asset('images/logo.png') }}" alt="Vex" width="100px">
          </a>
          <ul class="list-inline footer-menu">
            <li class="list-inline-item"><a href="{{ route('blog') }}">Blog</a></li>
            <li class="list-inline-item"><a href="{{ route('contact') }}">Contact</a></li>
            <li class="list-inline-item"><a href="{{ route('terms-conditions') }}">Terms &amp; Conditions</a></li>
            <li class="list-inline-item"><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
          </ul>
          <p class="copyright-text">Copyright &copy; 2021, Designed &amp; Developed By <a href="https://themefisher.com/">Themefisher</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
