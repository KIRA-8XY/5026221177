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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400|Josefin+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/themefisher-font/themefisher-font.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.min.css') }} ">

  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="icon" href="images/skin1004logo.png" type="image/x-icon">

</head><body id="body">

<!-- preloader start -->
<div class="preloader"></div>
<!-- preloader end -->


<header class="navigation sticky-top bg-white">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.html"> <img src="images/skin1004logo.png" alt="Vex" width="100px">
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
            <a class="nav-link dropdown-toggle" href="#!" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="tf-ion-chevron-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="{{ url('pages/blog-details') }}">Blog Details</a></li>
              <li><a class="dropdown-item" href="{{ url('pages/product-details') }}">Product Details</a></li>
              <li><a class="dropdown-item" href="{{ url('pages/privacy-policy') }}">Privacy Policy</a></li>
              <li><a class="dropdown-item" href="{{ url('pages/terms-condition') }}">Terms Conditions</a></li>

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
            <a class="nav-link" href="index.html#testimonial">Review</a>
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
    <div class="row justify-content-center">

      <div class="col-lg-5 col-sm-6 mb-5">
        <h2 class="font-weight-bold mb-4">Central Office</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
        <ul class="list-unstyled contact-list">
          <li class="mb-3"><a href="tel:0124857985320"><i class="tf-ion-ios-telephone mr-2"></i>
              0124857985320</a></li>
          <li class="mb-3"><a href="mailto:demo@email.com"><i class="tf-ion-email mr-2"></i>hello@skin1004korea.com</a></li>
          <li class="mb-3"><i class="tf-ion-ios-location mr-2"></i>Gangnam-gu, Seoul, Republic of Korea
          </li>
        </ul>
      </div>

      <div class="col-lg-3 col-sm-6 mb-5">

        <h2 class="font-weight-bold mb-4">Opening Hours</h2>
        <ul class="list-unstyled">

          <li class="mb-2">Monday: 9:00 – 19:00</li>

          <li class="mb-2">Tuesday: 9:00 – 19:00</li>

          <li class="mb-2">Wednesday: 9:00 – 19:00</li>

          <li class="mb-2">Thursday: 9:00 – 19:00</li>

          <li class="mb-2">Friday: 9:00 – 19:00</li>

          <li class="mb-2">Saturday: 9:00 – 19:00</li>

          <li class="mb-2">sunday: 9:00 – 19:00</li>

        </ul>

      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="font-weight-bold mb-4">Contact</h2>
        <form action="#" method="POST" class="row">
          <div class="col-lg-6 mb-3">
            <input type="text" class="form-control mb-2" id="name" name="name" placeholder="Your Name" required>
          </div>
          <div class="col-lg-6 mb-3">
            <input type="email" class="form-control mb-2" id="email" name="email" placeholder="Your Email" required>
          </div>
          <div class="col-12 mb-3">
            <textarea name="message" id="message" class="form-control mb-2" placeholder="Your Message" required></textarea>
          </div>
          <div class="col-12 text-right">
            <button type="submit" value="send" class="btn btn-main btn-main-sm">Send Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<script src="plugins/jquery/jquery.js"></script>

<script src="plugins/bootstrap/bootstrap.min.js"></script>

<script src="plugins/slick/slick.min.js"></script>

<script src="js/script.js"></script>
</body>
</html>
<footer>
  <div class="container text-center">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <a href="index.html" class="mb-4 d-inline-block"> <img src="images/skin1004logo.png" alt="Vex" width="100px"> </a>
          <ul class="list-inline footer-menu">

            <li class="list-inline-item">
              <a href="{{ url('pages/blog') }}">Blog</a>
            </li>

            <li class="list-inline-item">
              <a href="{{ url('pages/contact') }}">Contact</a>
            </li>

            <li class="list-inline-item">
              <a href="{{ url('pages/terms-condition') }}">Terms &amp; Conditions</a>
            </li>

            <li class="list-inline-item">
              <a href="{{ url('pages/privacy-policy') }}">Privacy Policy</a>
            </li>

          </ul>
          <p class="copyright-text">Copyright &copy; 2021, Designed &amp; Developed By <a href="https://themefisher.com/">Themefisher</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>
