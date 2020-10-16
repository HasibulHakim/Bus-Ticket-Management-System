<!Doctype html>
<html lang="en">

<head>
    <title>
        @yield('title')
    </title>

    <link rel="icon" href="{{ asset('frontend/images/all-img/favicon.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     @yield('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-v4.1.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animations.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/reponsive.css') }}">
   
</head>

<body>

    <!--header-part-->
    <div class="topnav update-topnav">
        <header class="bg-color">
            <div class="container top-bar">
                <ul class="top-content">
                    <li><i class="fas fa-envelope icon"></i>16103006@iubat.edu</li>
                    <li><i class="fas fa-phone-volume icon"></i>01770-121988</li>
                    <li >
                                <div>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                    </li>
                </ul>
                <!-- <ul class="top-content float-right">
                    <li><a href="{{ url('\login') }}">Login</a></li>
                </ul> -->
            </div>

            
        </header>
    </div>

    <!-- mobile-sidemenu -->
    <div class="row nav-menu">
        <div class="container mob-sidebar">
            <div id="mySidenav" class="sidenav">
                <a href="" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="crbnMenu">
                    <ul class="menu">
                        <li><a class="nav-link" href=""><span>Home</span> </a></li>
                        <li><a class="nav-link" href=""><span>About</span> </a></li>
                        <li><a class="nav-link" href="about.html"><span>Service</span> </a></li>
                        <li><a class="nav-link" href="location.html"><span>Location</span> </a></li>
                        <li><a class="nav-link" href="contact.html"><span>Contact</span> </a></li>
                      
                    </ul>
                </div>
            </div>
            <span class="side-btn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <a class="navbar-brand pb-2" href="index.html"> <img src="{{ asset('frontend/images/all-img/logo.png') }}" alt="logo_img"> </a>
        </div>
    </div>
    <!-- mobile-sidemenu -->

    <!-- desktop-menu -->
    <div class="row first-menu  update-menu">
        <div class="container">
            <nav class="navbar navbar-expand-sm offcanvas-desktop">
                <div class=" col-md-3 ">
                    <a class="navbar-brand pb-2" href="index-2.html"> <img src="{{ asset('frontend/images/all-img/logo-wht.png') }}"
                            alt="logo_img">
                    </a>
                </div>
                <div class="col-md-9 collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Service</a></li>
                        <li class="nav-item"><a class="nav-link" href="location.html">Location</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('booked_info') }}">Ticket Info</a></li>
                    </ul>
                    <!-- <div class="search-container">
                        <form>
                            <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
                            <input type="text" name="search">
                        </form>
                    </div> -->
                </div>
            </nav>
        </div>
    </div>
    <!-- desktop-menu -->


@yield('content')




    <!--footer-->
    <footer>
        <div class="container">
            <!--footer-widgets-->
            <div class="footer-widgets container animate fadeInDownLarge" data-anim-type="fadeInDownLarge"
                data-anim-delay="400">
                <div class="row">
                    <div class="widgets-col">
                        <a class="navbar-brand pb-2" href="index.html"> <img src="{{ asset('frontend/images/all-img/logo.png') }}"
                                alt="logo_img" class="img-fluid"> </a>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor illo
                            inventore
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor illo
                            inventore </p>

                        <p>
                            <i class="fas fa-map"></i> <span>2019 Avenue New York, NY 2019 US</span>
                        </p>
                        <p>
                            <i class="fas fa-phone-square"></i> <span>Free Call: 111 428 5581</span>
                        </p>
                        <p>
                            <i class="far fa-envelope"></i> <span> Drop us a message: info@ciazz.com </span>
                        </p>
                    </div>

                    <div class="widgets-col">
                        <!-- <h3> Links </h3>
                        <ul class="widget_links">
                            <li>
                                <a href="{{url('/')}}"> Home </a>
                            </li>
                            <li>
                                <a href="#"> About Us </a>
                            </li>
                            <li>
                                <a href="#"> Blogs </a>
                            </li>
                            <li>
                                <a href="#"> Services </a>
                            </li>
                            <li>
                                <a href="#">News </a>
                            </li>
                            <li>
                                <a href="#">Contact </a>
                            </li>
                        </ul> -->
                    </div>

                    <div class="widgets-col">
                        <!-- <h3> Services </h3>
                        <ul class="widget_links">
                            <li>
                                <a href="#"> Home </a>
                            </li>
                            <li>
                                <a href="#"> About Us </a>
                            </li>
                            <li>
                                <a href="#"> Blogs </a>
                            </li>
                            <li>
                                <a href="#"> Services </a>
                            </li>
                            <li>
                                <a href="#">News </a>
                            </li>
                            <li>
                                <a href="#">Contact </a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="widgets-col">
                        <!-- <h3> Company </h3>
                        <ul class="widget_links">
                            <li>
                                <a href="#"> Home </a>
                            </li>
                            <li>
                                <a href="#"> About Us </a>
                            </li>
                            <li>
                                <a href="#"> Blogs </a>
                            </li>
                            <li>
                                <a href="#"> Services </a>
                            </li>
                            <li>
                                <a href="#">News </a>
                            </li>
                            <li>
                                <a href="#">Contact </a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="widgets-col">
                        <h3> Download </h3>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor illo
                            inventore
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor illo
                            inventore </p>
                        <h4>GET TRACKINF APP ON</h4>
                        <ul class="widget_app">
                            <li>
                                <a href="#"> <img src="{{ asset('frontend/images/all-img/footer-img1.png') }}" alt="app-img"> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="{{ asset('frontend/images/all-img/footer-img2.png') }}" alt="app-img"> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//footer-widgets-->
    <div class="row coppy-right">
        <div class="container">
            <div class="col-md-4">
                <p> RoadLiners Transport | PSD Template:</p>
            </div>
            <div class="col-md-4">
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f icon"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in icon"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter icon"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest icon"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus icon"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="footer-menu">
                    <li><a href="#">terms & conditions |</a></li>
                    <li><a href="#">Privacy Policy |</a></li>
                    <li><a href="#">Site Map </a></li>
                </ul>
            </div>
            <!--./coppy-right-->
        </div>
    </div>
    <!--./footer-->
    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-alt-circle-up h4"></i></a>
    <!-- Return to Top -->
    <!--page-loader-->
    <!-- <div id="page-anim-preloader">
        <div class="page_preloader-inner  content-center">
            <div class="loading-window">
                <div class="car">
                    <div class="strike"></div>
                    <div class="strike strike2"></div>
                    <div class="strike strike3"></div>
                    <div class="strike strike4"></div>
                    <div class="strike strike5"></div>
                    <div class="car-detail spoiler"></div>
                    <div class="car-detail back"></div>
                    <div class="car-detail center"></div>
                    <div class="car-detail center1"></div>
                    <div class="car-detail front"></div>
                    <div class="car-detail wheel"></div>
                    <div class="car-detail wheel wheel2"></div>
                </div>
                <div class="text">
                    <span>Loading</span><span class="dots">...</span>
                </div>
            </div>
        </div>
    </div> -->
    <!--JS bootstrap-->
    @yield('js')
    <script src="{{ asset('frontend/js/jquery-v3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-v4.1.3.min.js') }}"></script>
    <script src="{{ asset('frontend/js/animations.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/counter.js') }}"></script>
    <script src="{{ asset('frontend/js/crbnMenu.js') }}"></script>
    <script src="{{ asset('frontend/js/custom-script.js') }}"></script>


</body>


</html>