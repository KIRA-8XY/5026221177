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

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('images/skin1004logo.png') }}" type="image/x-icon">

</head>
<body id="body">

<!-- preloader start -->
<div class="preloader"></div>
<!-- preloader end -->

<header class="navigation sticky-top bg-white">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/skin1004logo.png') }}" alt="Vex" width="100px">
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
            <a class="nav-link" href="{{ url('/products') }}">Products</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="tf-ion-chevron-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="{{ url('/blog-details') }}">Blog Details</a></li>
              <li><a class="dropdown-item" href="{{ url('/product-details') }}">Product Details</a></li>
              <li><a class="dropdown-item" href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
              <li><a class="dropdown-item" href="{{ url('/terms') }}">Terms &amp; Conditions</a></li>

              <li class="dropdown dropdown-submenu dropright">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu 01</a>

                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                  <li><a class="dropdown-item" href="{{ url('/') }}">Submenu 11</a></li>
                  <li><a class="dropdown-item" href="{{ url('/') }}">Submenu 12</a></li>
                </ul>
              </li>

              <li class="dropdown dropdown-submenu dropleft">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu 02</a>

                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                  <li><a class="dropdown-item" href="{{ url('/') }}">Submenu 21</a></li>
                  <li><a class="dropdown-item" href="{{ url('/') }}">Submenu 22</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}#testimonial">Review</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
          </li>

        </ul>

      </div>
    </nav>
  </div>
</header>

<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center mb-5">
        <h1 class="font-weight-bold">Terms &amp; Conditions</h1>
      </div>
      <div class="col-lg-10 mb-5">
        <div class="content">
          <p>Please read this terms and conditions stated below, which outline a lot of legal goodies. If you have an issue, always feel free to email us at <a href="mailto:contact@themefisher.com">contact@themefisher.com</a>, and we’ll do our best to resolve it in a fair and timely way.</p>
          <h3>Product Buy &amp; Delivery Policy</h3>
          <p>All payments are processed securely through PayPal or Stripe. Themefisher does not directly process payments through the website.</p>

          <h3>Refund Policy</h3>
          <ol>
            <li>Themefisher offers non-tangible digital products; hence, no refunds after purchase. If there's a problem with a download, we will address it.</li>
            <li>For qualifying returns, Themefisher will issue a refund. Refunds are generally processed within 3–5 business days.</li>
          </ol>

          <h3>Support Policy</h3>
          <ol>
            <li>Support includes assistance with theme setup, functionality, and fixing bugs.</li>
          </ol>

          <h3>Why We Support:</h3>
          <ol>
            <li>Support covers getting up and help in theme setup</li>
            <li>Help using features and theme options</li>
            <li>Bug fixes for theme or template</li>
            <li>Functionality issues</li>
          </ol>
        </div>
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
          <a href="{{ url('/') }}" class="mb-4 d-inline-block"> <img src="{{ asset('images/logo.png') }}" alt="Vex" width="100px"> </a>
          <ul class="list-inline footer-menu">

            <li class="list-inline-item">
              <a href="{{ url('/blog') }}">Blog</a>
            </li>

            <li class="list-inline-item">
              <a href="{{ url('/contact') }}">Contact</a>
            </li>

            <li class="list-inline-item">
              <a href="{{ url('/terms') }}">Terms &amp; Conditions</a>
            </li>

            <li class="list-inline-item">
              <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
            </li>

          </ul>
          <p class="copyright-text">Copyright &copy; 2021, Designed &amp; Developed By <a href="https://themefisher.com/">Themefisher</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>
