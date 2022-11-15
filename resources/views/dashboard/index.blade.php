<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Favicons -->
    <link href="{{ asset('dashboard/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('dashboard/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('dashboard/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('dashboard/lib/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/owlcarousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/owlcarousel/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/venobox/venobox.css') }}" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="{{ asset('dashboard/assets/css/nivo-slider-theme.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('dashboard/assets/css/style_2.css') }}" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="{{ asset('dashboard/assets/css/responsive.css') }}" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar-example">
    <div id="preloader"></div>

    <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <h1><span>e</span>Perpus</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="adminlogin.php">Admin Login</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="{{ asset('dashboard/assets/img/slider/slider1.jpg') }}" alt="" title="#slider-direction-1" />
        <img src="{{ asset('dashboard/assets/img/slider/slider2.jpg') }}" alt="" title="#slider-direction-2" />
        <img src="{{ asset('dashboard/assets/img/slider/slider3.jpg') }}" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Sistem Informasi </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Perpustakaan Online</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="adminlogin.php">Admin Login</a>			  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Sistem Informasi </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Perpustakaan Online</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="adminlogin.php">Admin Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Sistem Informasi </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Perpustakaan Online</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="adminlogin.php">Admin Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Hubungi Kami</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Telp: +62 851 234 567 789<br>
                  <span>Senin-Jum'at (8.00-16.00)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: info@example.com<br>
                  <span>Web: www.e-library.com</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Location: Jl. Contoh<br>
                  <span>36087, Contoh</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

  <!-- End Contact Area -->
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eLibraray</strong>. All Rights Reserved
              </p>
            </div>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('dashboard/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('dashboard/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('dashboard/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('dashboard/lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('dashboard/lib/knob/jquery.knob.js') }}"></script>
  <script src="{{ asset('dashboard/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('dashboard/lib/parallax/parallax.js') }}"></script>
  <script src="{{ asset('dashboard/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('dashboard/lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
  <script src="{{ asset('dashboard/lib/appear/jquery.appear.js') }}"></script>
  <script src="{{ asset('dashboard/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  {{-- <script src="contactform/contactform.js"></script> --}}

  <script src="{{ asset('dashboard/assets/js/main.js') }}"></script>
</body>
</html>