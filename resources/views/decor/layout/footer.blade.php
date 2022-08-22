<!-- Footer Section Start -->
<footer class="footer_sction">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-4 footer_widget">
                    <h4 class="footer_widget_title">Information</h4>
                    <div class="footer_widget_content">
                        <ul class="footer-menu-items">
                            <li class="menu-item"><a href="{{url('/')}}" class="menu-link"><i class="fas fa-angle-right"></i> Home</a></li>
                            <li class="menu-item"><a href="#about" class="menu-link"><i class="fas fa-angle-right"></i> About Us</a></li>
                            <li class="menu-item"><a href="#services-contact" class="menu-link"><i class="fas fa-angle-right"></i> Services</a></li>
                            <li class="menu-item"><a href="#portfolio" class="menu-link"><i class="fas fa-angle-right"></i> Portfolio</a></li>
                            <li class="menu-item"><a href="{{route('front.video.gallery')}}" class="menu-link"><i class="fas fa-angle-right"></i> Videos</a></li>
                            <li class="menu-item"><a href="{{route('front.testimonials')}}" class="menu-link"><i class="fas fa-angle-right"></i> Testimonials</a></li>
                            <li class="menu-item"><a href="#services-contact" class="menu-link"><i class="fas fa-angle-right"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 footer_widget">
                    <h4 class="footer_widget_title">{{$contact_us->name}}</h4>
                    <div class="footer_widget_content">
                        <ul class="footer-menu-items">
                            <li class="menu-item"><a href="{{$contact_us->web_address}}" class="menu-link"><i class="fas fa-map-marker-alt"></i> {{$contact_us->contact_address}}</a></li>
                            <li class="menu-item"><a href="tel:{{$contact_us->contact_phone}}" class="menu-link"><i class="fas fa-phone"></i> {{$contact_us->contact_phone}}</a></li>
                            <li class="menu-item"><a href="mailto:{{$contact_us->contact_email}}" class="menu-link"><i class="fas fa-envelope"></i> {{$contact_us->contact_email}}</a></li>
                            <li class="menu-item"><a href="{{$contact_us->web_address}}" class="menu-link"><i class="fas fa-globe"></i> {{$contact_us->web_address}}</a>
                            </li>
                    </div>
                </div>
                <div class="col-md-4 footer_widget">
                    <h4 class="footer_widget_title">Follow Us On</h4>
                    <div class="footer_widget_content">
                        <div class="footer_social">
                            <a href="{{$contact_us->fb_link}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{$contact_us->instagram_link}}" target="_blank"><i class="fab fa-instagram"></i></a>
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
    <script src="{{url('public/decor/assets/js/jquery.bookblock.js')}}"></script>
    <script>
        var Page = (function() {
            
            var config = {
                    $bookBlock : $( '#bb-bookblock' ),
                    $navNext : $( '#bb-nav-next' ),
                    $navPrev : $( '#bb-nav-prev' ),
                    $navFirst : $( '#bb-nav-first' ),
                    $navLast : $( '#bb-nav-last' )
                },
                init = function() {
                    config.$bookBlock.bookblock( {
                        speed : 1000,
                        shadowSides : 0.8,
                        shadowFlip : 0.4,
                        autoplay:true,
                        autoplaySpeed:1000,
                        circular : true,
                        dots: true,
          onEndFlip : function(old, page, isLimit) { 
            console.log("old",old);
            console.log("page",page);
            return true; 
          },
                    } );
                    initEvents();
                },
                initEvents = function() {
                    
                    var $slides = config.$bookBlock.children();

                    // add navigation events
                    config.$navNext.on( 'click touchstart', function() {
                        config.$bookBlock.bookblock( 'next' );
                        return false;
                    } );

                    config.$navPrev.on( 'click touchstart', function() {
                        config.$bookBlock.bookblock( 'prev' );
                        return false;
                    } );

                    config.$navFirst.on( 'click touchstart', function() {
                        config.$bookBlock.bookblock( 'first' );
                        return false;
                    } );

                    config.$navLast.on( 'click touchstart', function() {
                        config.$bookBlock.bookblock( 'last' );
                        return false;
                    } );
                    
                    // add swipe events
                    $slides.on( {
                        'swipeleft' : function( event ) {
                            config.$bookBlock.bookblock( 'next' );
                            return false;
                        },
                        'swiperight' : function( event ) {
                            config.$bookBlock.bookblock( 'prev' );
                            return false;
                        }
                    } );

                    // add keyboard events
                    $( document ).keydown( function(e) {
                        var keyCode = e.keyCode || e.which,
                            arrow = {
                                left : 37,
                                up : 38,
                                right : 39,
                                down : 40
                            };

                        switch (keyCode) {
                            case arrow.left:
                                config.$bookBlock.bookblock( 'prev' );
                                break;
                            case arrow.right:
                                config.$bookBlock.bookblock( 'next' );
                                break;
                        }
                    } );
                };

                return { init : init };

        })();
    </script>
    <script>
            Page.init();
    </script>
    <script type="text/javascript" src="{{url('public/decor/assets/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/decor/assets/js/main.js')}}"></script>
  </body>
</html>