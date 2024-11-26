<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from amozo-html.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 14:45:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dahams Consult</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{asset('assets/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="Crsine HTML Template For Car Services" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/icomoon-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/twentytwenty/twentytwenty.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/amozo.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/amozo-responsive.css')}}" />
</head>

<body>

    <div class="preloader">
        <img class="preloader__image" width="60" src="{{asset('assets/images/team/loader.jpg')}}" alt="" />
    </div>

    <!-- /.preloader -->
    <div class="page-wrapper">

            {{-- header included --}}
            @include('layouts.partials.header')

            {{-- yeild home extension --}}
            @yield('content')
   
            {{-- footer included --}}
            @include('layouts.partials.footer')
   



    

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{asset('assets/images/resources/mobilemenu_logo.png')}}"
                        width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@mozo.com</a>
                </li>
                <li>
                    <i class="icon-call-1"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->



    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn2">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->



    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow-2"></i></a>


    <script src="{{asset('assets/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{asset('assets/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{asset('assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{asset('assets/vendors/wow/wow.js')}}"></script>
    <script src="{{asset('assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{asset('assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendors/twentytwenty/twentytwenty.js')}}"></script>
    <script src="{{asset('assets/vendors/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('assets/vendors/parallax/parallax.min.js')}}"></script>
    <script src="{{asset('assets/vendors/tilt.js/tilt.jquery.js')}}"></script>


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>

    <!-- template js -->
    <script src="{{asset('assets/js/amozo.js')}}"></script>


</body>


<!-- Mirrored from amozo-html.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 14:46:18 GMT -->
</html>