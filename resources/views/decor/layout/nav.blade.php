<!-- Header Logo Starts -->
<div class="container logo_holder">
    <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('public/uploads/'.$g_setting->logo) }}" alt="LOGO"></a>
</div>
<!-- Header Logo Ends -->

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
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services-contact">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('front.video.gallery')}}">Videos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('front.testimonials')}}">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services-contact">Contact Us</a>
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
    <li class="menu-item"><a href="#about" class="menu-link">About Us</a></li>
    <li class="menu-item"><a href="#services-contact" class="menu-link">Services</a></li>
    <li class="menu-item"><a href="#portfolio" class="menu-link">Portfolio</a></li>
    <li class="menu-item"><a href="{{route('front.video.gallery')}}" class="menu-link">Videos</a></li>
    <li class="menu-item"><a href="{{route('front.testimonials')}}" class="menu-link">Testimonials</a></li>
    <li class="menu-item"><a href="#services-contact" class="menu-link">Contact Us</a></li>
  </ul>
  <p>FOR ALL YOUR DECORATION NEEDS</p>
  <div class="menu-contact-info">
      <p>Contact US</p>
      <a href="tel:972-379-9330">972-379-9330</a><br>
      <a href="mailto:decorbymadiha@gmail.com">decorbymadiha@gmail.com</a><br>
      <a href="http://www.decorbymadiha.com">decorbymadiha.com</a>
      <ul class="menu-social">
          <li><a href="https://www.facebook.com/decorbymadiha" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="https://www.instagram.com/decorbymadiha" target="_blank"><i class="fab fa-instagram"></i></a></li>
      </ul>
  </div>
</nav><!-- /c-menu slide-left-->
<!-- Mobile Menu Ends Here -->