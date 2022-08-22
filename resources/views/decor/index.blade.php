 @extends('decor.layout.main')
 @section("main_slider")
 <!-- Header Slider Starts -->
<div class="container home_slide">
    <div class="bb-custom-wrapper">
        <div id="bb-bookblock" class="bb-bookblock">
            <!-- <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="assets/img/Slider11.jpg" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div> -->
            @foreach($sliders as $item)
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{ asset('public/uploads/'.$item->slider_photo) }}" alt="">
                    <h1 class="text-center slider_caption">{{$item->slider_heading}}</h1>
                </div>
            </div>
            @endforeach
            <!-- <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider23.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider21.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider22.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider18.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider19.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider20.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Mehdi Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider17.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider12.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider13.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider14.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider15.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider16.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider01.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Corporate Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider02.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider03.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Corporate Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider04.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider05.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider07.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider09.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div>
            <div class="bb-item">
                <div class="bb-custom-side">
                    <img src="{{url('public/decor/assets/img/Slider10.jpg')}}" alt="">
                    <h1 class="text-center slider_caption">Wedding Events</h1>
                </div>
            </div> -->
        </div>
        <nav>
            <a id="bb-nav-prev" href="#" class="bb-custom-icon left_button"><i class="fas fa-chevron-left"></i></a>
            <a id="bb-nav-next" href="#" class="bb-custom-icon right_button"><i class="fas fa-chevron-right"></i></a>
        </nav>
    </div> 
</div>
<!-- Header Slider Ends -->
 @endsection

 @section('main-container')
    <!-- Service Section Start -->
    <section id="services-contact" class="section_holder service_contact_sec">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12 contact_box">
                    <div class="box_content_holder">
                        <div class="box_image">
                            <img src="{{asset('public/uploads/'.$choose_contact_banner->banner_contact)}}" alt="Contact Image" class="img-fluid">
                        </div>
                        <div class="box_content_area">
                            <div class="box_title_holder">
                                <h2 class="box_title">
                                    <span>FOR ALL YOUR DECORATION NEEDS</span>{{$contact_us->name}}
                                </h2>
                            </div>
                            <div class="box_content">
                                <ul class="contact_info">
                                    <li><a href="tel:972-379-9330">{{$contact_us->contact_phone}}</a></li>
                                    <li><a href="mailto:decorbymadiha@gmail.com">{{$contact_us->contact_email}}</a></li>
                                    <li class="color_link"><a href="{{$contact_us->web_address}}">decorbymadiha.com</a></li>
                                    <li class="contact_btn"><a href="https://forms.gle/dun1WNdhLJgANkLU6" target="_blank">Inquiry Form</a></li>
                                    <li class="color_link social_links">
                                        <a href="{{$contact_us->fb_link}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{$contact_us->instagram_link}}" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 service_box">
                    <div class="box_content_holder">
                        <div class="box_image">
                            <img src="{{asset('public/uploads/'.$choose_contact_banner->banner_blog)}}" alt="Contact Image" class="img-fluid">
                        </div>
                        <div class="box_content_area">
                            <div class="box_title_holder">
                                <h2 class="box_title">
                                    <span>Classy Decor By Madiha</span>We Specialize In
                                </h2>
                            </div>
                            <div class="box_content">
                                <ul class="service_list clearfix">
                                    @foreach ($why_choose_items as $item)
                                    <li>{!!$item->icon!!} {{$item->name}}</li>
                                    @endforeach
                                    {{-- <li><i class="fas fa-arrow-right"></i> Corporate Events</li>
                                    <li><i class="fas fa-arrow-right"></i> Quinceanera</li>
                                    <li><i class="fas fa-arrow-right"></i> Sweet 16</li>
                                    <li><i class="fas fa-arrow-right"></i> Private in Home Parties</li>
                                    <li><i class="fas fa-arrow-right"></i> Bridal Showers</li>
                                    <li><i class="fas fa-arrow-right"></i> Birthday Parties</li>
                                    <li><i class="fas fa-arrow-right"></i> Custom Events</li>
                                    <li><i class="fas fa-arrow-right"></i> Baby Showers</li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->
    <!-- Portfolio Section Start -->
    <section id="portfolio" class="section_holder portfolio_sec">
        <div class="container">
            <div class="section_title_holder">
                <h2 class="section_title">
                    {{$projects_content->name}}
                </h2>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-8 col-sm-12">
                    <p class="section_text">{!! $projects_content->detail !!}</p>
                </div>
            </div>
            <div class="row clearfix portfolio_showcase">
                @foreach($projects as $item)
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio_holder">
                    <a href="{{route('front.portfolio.gallery', $item->project_slug)}}">
                        <div class="portfolio_image">
                            <img src="{{ asset('public/uploads/'.$item->project_featured_photo)}}" alt="" class="img-fluid">
                        </div>
                        <div class="portfolio_info">
                            <h3>{{$item->project_name}}</h3>
                        </div>
                    </a>
                </div>
                @endforeach
                <!-- <div class="col-md-4 col-sm-6 col-xs-12 portfolio_holder">
                    <a href="portfolio-birthday.html">
                        <div class="portfolio_image">
                            <img src="{{url('public/decor/assets/img/portfolio/portfolio02.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="portfolio_info">
                            <h3>Birthday</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio_holder">
                    <a href="portfolio-sweet16.html">
                        <div class="portfolio_image">
                            <img src="{{url('public/decor/assets/img/portfolio/portfolio03.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="portfolio_info">
                            <h3>Sweet 16</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio_holder">
                    <a href="portfolio-baby-shower.html">
                        <div class="portfolio_image">
                            <img src="{{url('public/decor/assets/img/portfolio/portfolio04.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="portfolio_info">
                            <h3>Baby Showers</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio_holder">
                    <a href="portfolio-corporate.html">
                        <div class="portfolio_image">
                            <img src="{{url('public/decor/assets/img/portfolio/portfolio05.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="portfolio_info">
                            <h3>Corporate Events</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio_holder">
                    <a href="portfolio-mehndi.html">
                        <div class="portfolio_image">
                            <img src="{{url('public/decor/assets/img/portfolio/portfolio06.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="portfolio_info">
                            <h3>Mehndi</h3>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- About Section Start -->
    <section id="about" class="section_holder about_sec">
        <div class="container">
            <div class="section_title_holder">
                <h2 class="section_title">
                    {{$about_content->name}}
                </h2>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-10 col-sm-12">
                    <p class="section_text">{!! $about_content->detail !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Start -->
    <section id="testimonial" class="section_holder testimonial_sec">
        <div class="container">
            <div class="section_title_holder">
                <h2 class="section_title">
                    Testimonials
                </h2>
                <i class="fas fa-quote-left"></i>
            </div>

            <div class="row justify-content-md-center">
                
                <div class="col-md-10 col-sm-12">
                    <div class="testimonials_slider">
                        @foreach($testimonials as $item)
                      <div>
                        <p>{!! $item->comment !!}<p>
                        <p class="author_info">{{$item->name}}</p>
                      </div>
                      @endforeach
                      {{-- <div>
                          <p>"Thank you Classy Decor for doing a phenomenal job for my daughter's 13th Birthday."</p>
                          <p class="author_info">Aysha Khan</p>
                      </div>
                      <div>
                          <p>"Madiha did my granddaughter’s decor and did an amazing job with the details."</p>
                          <p class="author_info">Tamana Rabnawaz</p>
                      </div> --}}
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- Testimonial Section End -->
@endsection