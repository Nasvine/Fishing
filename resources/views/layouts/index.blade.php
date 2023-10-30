
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Fishing</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v3.2.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('fishing_photo/logo.ico') }}">
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ asset('css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
        <!-- Slider -->               
        <link rel="stylesheet" href="{{ asset('css/tiny-slider.css')}}"/> 
        <!-- Main Css -->
        <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{ asset('css/colors/default.css')}}" rel="stylesheet" id="color-opt">

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="{{ route('accueil') }}">
                    <span class="logo-light-mode">
                        <img src="{{ asset('fishing_photo/logo.jpg') }}" class="l-dark" height="50" alt="">
                        <img src="{{ asset('fishing_photo/logo.jpg') }}" class="l-light" height="50" alt="">
                    </span>
                    <img src="{{ asset('fishing_photo/logo.jpg') }}" height="24" class="logo-dark-mode" alt="">
                </a>
                <div class="buy-button">
                    <a href="https://1.envato.market/4n73n" class="" target="_blank"></a>
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    @include('partials.horizontale')
                    <!--end login button-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        <!-- Hero Start -->
        
        @yield('content')
        

        <!-- Footer Start -->
        @include('partials.footer')
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        

        <!-- javascript -->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <!-- SLIDER -->
        <script src="{{ asset('js/tiny-slider.js ') }}"></script>
        <script src="{{ asset('js/easy_background.js') }}"></script>
        <!-- Icons -->
        <script src="{{ asset('js/feather.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('js/plugins.init.js') }}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="{{ asset('js/app.js') }}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->

        <script>
            easy_background("#home",
                {
                   /*  slide: ["images/real/1.jpg", "images/real/2.jpg", "images/real/3.jpg"], */
                    slide: ["{{ asset('fishing_photo/image3.jpg') }}", "{{ asset('fishing_photo/image1.jpg') }}", "{{ asset('fishing_photo/image2.jpg') }}"],
                    delay: [2000, 2000, 2000]
                }
            );
        </script>
    </body>
</html>