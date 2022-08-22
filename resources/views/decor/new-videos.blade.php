<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="DecorByMadiha">
    <meta property="og:description" content="Classy Decor By MAdiha">
    <meta property="og:image" content="http://demo.coder71.com/decorbymadiha/assets/img/thumbnail.jpg">
    <meta property="og:url" content="http://demo.coder71.com/decorbymadiha/index.html">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Bootstrap CSS -->
    <link href="{{url('public/decor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/decor/assets/css/all.css')}}">

    <!-- HOME SLIDER -->
    <link rel="stylesheet" type="text/css" href="{{url('public/decor/assets/css/default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('public/decor/assets/css/bookblock.css')}}" />

    <script src="{{url('public/decor/assets/js/modernizr.custom.js')}}"></script>
    

    <!-- SLICK SLIDER -->

	<link rel="stylesheet" type="text/css" href="{{url('public/decor/assets/slick/slick.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{url('public/decor/assets/slick/slick-theme.css')}}"/>

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/decor/assets/css/style.css')}}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{url('public/decor/assets/img/favicon_io/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('public/decor/assets/img/favicon_io/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('public/decor/assets/img/favicon_io/favicon-16x16.png')}}">

    <title>Videos - Decor By Madiha</title>
  </head>
  <body class="inner_page">

    <!--Header Section -->
    <header class="site_header">

    <!-- Nav Section Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('public/uploads/'.$g_setting->logo) }}" alt="LOGO"></a>
        <button class="navbar-toggler menu-tab" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}#services-contact">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route('front.video.gallery')}}">Videos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('front.testimonials')}}">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}#services-contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Mobile Menu Starts From Here -->
    <nav  class="menu-hide">
      <button class="menu-close"><i class="fas fa-times"></i></button>
      <ul class="menu-items">
        <li class="menu-item"><a href="{{url('/')}}" class="menu-link">Home</a></li>
        <li class="menu-item"><a href="{{url('/')}}#about" class="menu-link">About Us</a></li>
        <li class="menu-item"><a href="{{url('/')}}#services-contact" class="menu-link">Services</a></li>
        <li class="menu-item"><a href="{{url('/')}}#portfolio" class="menu-link">Portfolio</a></li>
        <li class="menu-item"><a href="{{route('front.video.gallery')}}" class="menu-link">Videos</a></li>
        <li class="menu-item"><a href="{{route('front.testimonials')}}" class="menu-link">Testimonials</a></li>
        <li class="menu-item"><a href="{{url('/')}}#services-contact" class="menu-link">Contact Us</a></li>
      </ul>
      <p>FOR ALL YOUR DECORATION NEEDS</p>
      <div class="menu-contact-info">
          <p>Contact US</p>
          <a href="tel:972-379-9330">972-379-9330</a><br>
          <a href="mailto:madiha@decorbymadiha.com">madiha@decorbymadiha.com</a><br>
          <a href="https://www.decorbymadiha.com">decorbymadiha.com</a>
          <ul class="menu-social">
              <li><a href="https://www.facebook.com/decorbymadiha" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://www.instagram.com/decorbymadiha" target="_blank"><i class="fab fa-instagram"></i></a></li>
          </ul>
      </div>
    </nav><!-- /c-menu slide-left-->
    <!-- Mobile Menu Ends Here -->

    <!-- Nav Section End -->

    </header>
    <!-- Header Section End --> 

    <!-- Page Header Start -->
<div class="page_header">
        <div class="section_title_holder">
            <h2 class="section_title">
                Videos
            </h2>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a class="" href="{{url('/')}}">Home<i class="fas fa-chevron-right"></i></a></li>
                <li><span>Videos</span></li>
            </ul>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Videos Gallery Start -->
    <section id="gallery" class="video_holder">
      <div class="container">
        <div id="image-gallery">
          <div class="row">
          @foreach($videos as $item)
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 video">
              <div class="img-wrapper">
                <a href="https://www.youtube.com/embed/{{$item->video_youtube}}">
                  <img src="http://img.youtube.com/vi/{{$item->video_youtube}}/hqdefault.jpg" class="img-fluid">
                  <i class="fa fa-play video_play_btn" aria-hidden="true"></i>
                  <h3>{{$item->video_caption}}</h3>
                </a>
                <div class="img-overlay">
                  
                </div>
              </div>
            </div>
            @endforeach

            <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
              <div class="img-wrapper">
                <a href="https://www.youtube.com/embed/dImnFuJvD84"><img src="assets/img/videos/event02.jpg" class="img-fluid"><i class="fa fa-play video_play_btn" aria-hidden="true"></i><h3>Event: 06/04/21</h3></a>
                <div class="img-overlay">
                  
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
              <div class="img-wrapper">
                <a href="https://www.youtube.com/embed/mWZBM4VomkA"><img src="assets/img/videos/event03.jpg" class="img-fluid"><i class="fa fa-play video_play_btn" aria-hidden="true"></i><h3>Event: 05/29/21</h3></a>
                <div class="img-overlay">
                  
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
              <div class="img-wrapper">
                <a href="https://www.youtube.com/embed/-A3j4Q3RGWA"><img src="assets/img/videos/event04.jpg" class="img-fluid"><i class="fa fa-play video_play_btn" aria-hidden="true"></i><h3>Event: 05/22/21</h3></a>
                <div class="img-overlay">
                  
                </div>
              </div>
            </div> -->

          </div><!-- End row -->
        </div><!-- End image gallery -->
      </div><!-- End container --> 
    </section>
    <!-- Videos Gallery End -->

    <!-- Footer Section Start -->
    <footer class="footer_sction">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-4 footer_widget">
                    <h4 class="footer_widget_title">Information</h4>
                    <div class="footer_widget_content">
                        <ul class="footer-menu-items">
                            <li class="menu-item"><a href="{{url('/')}}" class="menu-link"><i class="fas fa-angle-right"></i> Home</a></li>
                            <li class="menu-item"><a href="{{url('/')}}#about" class="menu-link"><i class="fas fa-angle-right"></i> About Us</a></li>
                            <li class="menu-item"><a href="{{url('/')}}#services-contact" class="menu-link"><i class="fas fa-angle-right"></i> Services</a></li>
                            <li class="menu-item"><a href="{{url('/')}}#portfolio" class="menu-link"><i class="fas fa-angle-right"></i> Portfolio</a></li>
                            <li class="menu-item"><a href="{{route('front.testimonials')}}" class="menu-link"><i class="fas fa-angle-right"></i> Videos</a></li>
                            <li class="menu-item"><a href="{{route('front.testimonials')}}" class="menu-link"><i class="fas fa-angle-right"></i> Testimonials</a></li>
                            <li class="menu-item"><a href="{{url('/')}}#services-contact" class="menu-link"><i class="fas fa-angle-right"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 footer_widget">
                    <h4 class="footer_widget_title">Contact Us</h4>
                    <div class="footer_widget_content">
                        <ul class="footer-menu-items">
                            <li class="menu-item"><a href="{{$contact_us->web_address}}" class="menu-link"><i class="fas fa-map-marker-alt"></i> {{$contact_us->contact_address}}</a></li>
                            <li class="menu-item"><a href="tel:{{$contact_us->contact_phone}}" class="menu-link"><i class="fas fa-phone"></i> {{$contact_us->contact_phone}}</a></li>
                            <li class="menu-item"><a href="mailto:{{$contact_us->contact_email}}" class="menu-link"><i class="fas fa-envelope"></i> {{$contact_us->contact_email}}</a></li>
                            <li class="menu-item"><a href="{{$contact_us->web_address}}" class="menu-link"><i class="fas fa-globe"></i> {{$contact_us->web_address}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 footer_widget">
                    <h4 class="footer_widget_title">Follow Us On</h4>
                    <div class="footer_widget_content">
                        <div class="footer_social">
                            <a href="https://www.facebook.com/decorbymadiha" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/decorbymadiha" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row copyright">
                <div class="col-md-6">
                    <p>Copyright © Decorbymadiha.com. All right reserved</p>
                </div>
                <div class="col-md-6">
                    <p class="copyright_right">Design by <a href="https://khsitsolutions.com/" target="_blank">KHS IT Solutions, Inc.</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{url('public/decor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="{{url('public/decor/assets/js/jquerypp.custom.js')}}"></script>
    <script type="text/javascript" src="{{url('public/decor/assets/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/decor/assets/js/main.js')}}"></script>
    <script type="text/javascript">
      // Lightbox
        var $overlay = $('<div id="overlay"></div>');
        var $image = $("<iframe>");
        var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

        // Add overlay
        $overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
        $("#gallery").append($overlay);

        // Hide overlay on default
        $overlay.hide();

        // When an image is clicked
        $(".img-overlay").click(function(event) {
          // Prevents default behavior
          event.preventDefault();
          // Adds href attribute to variable
          var imageLocation = $(this).prev().attr("href");
          // Add the image src to $image
          $image.attr("src", imageLocation);
          // Fade in the overlay
          $overlay.fadeIn("slow");
        });

        // When the overlay is clicked
        $overlay.click(function() {
          // Fade out the overlay
          $(this).fadeOut("slow");
        });

        // When next button is clicked
        $nextButton.click(function(event) {
          // Hide the current image
          $("#overlay img").hide();
          // Overlay image location
          var $currentImgSrc = $("#overlay img").attr("src");
          // Image with matching location of the overlay image
          var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
          // Finds the next image
          var $nextImg = $($currentImg.closest(".image").next().find("img"));
          // All of the images in the gallery
          var $images = $("#image-gallery img");
          // If there is a next image
          if ($nextImg.length > 0) { 
            // Fade in the next image
            $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
          } else {
            // Otherwise fade in the first image
            $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
          }
          // Prevents overlay from being hidden
          event.stopPropagation();
        });

        // When previous button is clicked
        $prevButton.click(function(event) {
          // Hide the current image
          $("#overlay img").hide();
          // Overlay image location
          var $currentImgSrc = $("#overlay img").attr("src");
          // Image with matching location of the overlay image
          var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
          // Finds the next image
          var $nextImg = $($currentImg.closest(".image").prev().find("img"));
          // Fade in the next image
          $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
          // Prevents overlay from being hidden
          event.stopPropagation();
        });

        // When the exit button is clicked
        $exitButton.click(function() {
          // Fade out the overlay
          $("#overlay").fadeOut("slow");
        });
    </script>
  </body>
</html>
















































