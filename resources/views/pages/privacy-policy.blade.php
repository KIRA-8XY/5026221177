<!DOCTYPE html>
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
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ asset('images/skin1004logo.png') }}" alt="Vex" width="100px">
        </a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navigation">
          <ul class="navbar-nav ml-auto mr-n0 mr-md-n3">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Products</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#!" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="tf-ion-chevron-down"></i></a>
              <ul class="dropdown-menu" aria-labelledby="dropdown03">
                <li><a class="dropdown-item" href="{{ route('blog-details') }}">Blog Details</a></li>
                <li><a class="dropdown-item" href="{{ route('product-details') }}">Product Details</a></li>
                <li><a class="dropdown-item" href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                <li><a class="dropdown-item" href="{{ route('terms-conditions') }}">Terms Conditions</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ route('testimonial') }}">Review</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center mb-5">
          <h1 class="font-weight-bold">Privacy Policy</h1>
        </div>
        <div class="col-lg-10 mb-5">
          <div class="content">
            <p>Please read this terms and conditions stated below, which outline a lot of legal goodies, but the bottom line is it’s our aim to always take care of both of us, as a customer, or as a seller. We’ve included many of these terms to legally protect ourselves, but if you have an issue, always feel free to email us at <a href="mailto:contact@themefisher.com">contact@themefisher.com</a> and we’ll do our best to resolve it in a fair and timely way.</p>

            <h3 id="product-buy--delivery-policy">Product Buy &amp; delivery policy</h3>
            <p>1) All payments are processed securely through PayPal or Stripe. Themefisher does not directly process payments through the website. So any kind of problem if you face Themefisher will not take any responsibility.</p>

            <h3 id="refund-policy">Refund Policy</h3>
            <ol>
              <li>Since Themefisher is offering non-tangible and irrevocable digital products, we do NOT issue refunds after a purchase is made. If there is a problem with one of the digital download products or if you experience any difficulty with the download, we will fix the problem.</li>
              <li>You have 24 hours to inspect your purchase and to determine if it does not meet with the expectations laid forth by The Themefisher. In the event that you wish to receive a refund, Themefisher will issue you a refund and ask you to specify how the product failed to live up to expectations.</li>
              <li>When you make a qualifying return, We’ll credit the full amount, less the handling charges. Refunds are generally processed within 3–5 business days after we receive your claim and find it eligible for a return. Refunds are applied to the original payment option.</li>
            </ol>

            <h3 id="support-policy">Support Policy</h3>
            <ol>
              <li>Support covers getting up and help in theme setup</li>
              <li>Help using features and theme options</li>
              <li>Bug fixes – if you discovered a bug in the theme/Template we will fix it</li>
              <li>Functionality which does not work as advertised</li>
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

  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <div class="block">
            <a href="{{ route('home') }}" class="mb-4 d-inline-block">
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
