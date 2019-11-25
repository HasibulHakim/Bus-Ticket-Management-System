@extends('home.app')
@section('title')
Bus Ticket Management System
@endsection

@section('content')

    <!-- home-slider -->
    <section id="mainSlider" class="hero-slide">
        <div id="owl-main" class="owl-carousel">
            <div class="item">
                <img src="{{ asset('frontend/images/all-img/2.1.jpg') }}" alt="logo_img" class="img-fluid">
                <div class="hero-slider__content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="hero-slider__content">
                                    <h4>One stap solution for</h4>
                                    <h2 class="hero-slider__title">WorldWide <span>Transportation</span></h2>
                                    <p class="hero-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        sed
                                        do eiusm tempor incididunt ut labore et dolore.</p>
                                    
                                    <a class="hero-slider__btn" href="{{ url('/login') }}" tabindex="0"> Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.item -->

            
        </div><!-- /.owl-carousel -->
    </section>

    <!--service section-->
    
    <!--service section-->
    <!--choose section-->
    <section class="row choose-section space choose-new" id="choose">
        <div class="container">
            <div class="title-section center pb-60">
                <h2><span>WHY CHOOSE US</span></h2>
                <p class="title-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec sagittis
                    nisi.
                    Duis rhoncus
                    imperdiet tortor eu sodales </p>
            </div>
            <div class="row justify-content-end">

                <div class="col-lg-6 col-md-6 choose-desc ">
                    <ul>
                        <li class="pb-30">
                            <span class="img-wapper"> <img src="{{ asset('frontend/images/all-img/icon-1.png') }}" alt="icon"></span>
                            <h4> Goods Tracking System </h4>
                            <p>Sed et ipsum est et ipsum est, tempor nonumy vero duo eos. Invidunt kasd erat.</p>
                        </li>
                        <li class="pb-30">
                            <span class="img-wapper"> <img src="{{ asset('frontend/images/all-img/icon-2.png') }}" alt="icon"></span>
                            <h4> Worldwide Location </h4>
                            <p>Voluptua ipsum labore et sit amet gubergren eos ipsum lorem. Rebum sed sanctus et et.</p>
                        </li>
                        <li class="pb-30">
                            <span class="img-wapper"> <img src="{{ asset('frontend/images/all-img/icon-3.png') }}" alt="icon"></span>
                            <h4> Huge Storage</h4>
                            <p>Lorem erat vero at nonumy tempor consetetur labore rebum diam et, eirmod diam kasd erat.
                            </p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--choose section-->
    
    <!--team section-->
    <section class="row team-section space" id="team">
        <div class="container">
            <div class="title-section center pb-60">
                <h2><span>MEET OUR TEAM</span></h2>
                <p class="title-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec sagittis
                    nisi.
                    Duis rhoncus
                    imperdiet tortor eu sodales </p>
            </div>
            <div class="swiper-container team-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure class="figure team bg-color">
                            <div class="bg-pic">
                                <div class="pic">
                                    <img src="{{ asset('frontend/images/home-team/client-1.jpg') }}" alt="service">
                                </div>
                            </div>
                            <figcaption class="text-center">
                                <div class="team-content">
                                    <ul class="social-icons">
                                        <li><i class="fab fa-facebook icon"></i></li>
                                        <li><i class="fab fa-linkedin icon"></i></li>
                                        <li><i class="fab fa-twitter-square icon"></i></li>
                                    </ul>
                                    <h3 class="team-title"><a href="#">williamson</a></h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed accumsan
                                        diam.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="figure team bg-color">
                            <div class="bg-pic">
                                <div class="pic">
                                    <img src="{{ asset('frontend/images/home-team/client-2.jpg') }}" alt="service">
                                </div>
                            </div>
                            <figcaption class="text-center">
                                <div class="team-content">
                                    <ul class="social-icons">
                                        <li><i class="fab fa-facebook icon"></i></li>
                                        <li><i class="fab fa-linkedin icon"></i></li>
                                        <li><i class="fab fa-twitter-square icon"></i></li>
                                    </ul>
                                    <h3 class="team-title"><a href="#">williamson</a></h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed accumsan
                                        diam.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="figure team bg-color">
                            <div class="bg-pic">
                                <div class="pic">
                                    <img src="{{ asset('frontend/images/home-team/client-3.jpg') }}" alt="service">
                                </div>
                            </div>
                            <figcaption class="text-center">
                                <div class="team-content">
                                    <ul class="social-icons">
                                        <li><i class="fab fa-facebook icon"></i></li>
                                        <li><i class="fab fa-linkedin icon"></i></li>
                                        <li><i class="fab fa-twitter-square icon"></i></li>
                                    </ul>
                                    <h3 class="team-title"><a href="#">williamson</a></h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed accumsan
                                        diam.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="swiper-btn-center">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>
            </div>
        </div>
    </section>
    <!--team section-->

    <!--clients section-->
    
    <!--clients section-->

    <!--testimonial section-->
    <section class="row testimonial-section bg-color space" id="testimonial">
        <div class="container">
            <div class="title-section center pb-60">
                <h2><span>WHAT OUR CLIENT SAY</span></h2>
                <p class="title-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec sagittis
                    nisi.
                    Duis rhoncus
                    imperdiet tortor eu sodales </p>
            </div>

            <div class="swiper-container home-tsetimonial">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure class="testimonial">
                            <div class="pic-bg">
                                <div class="pic">
                                    <img src="{{ asset('frontend/images/home-testimonial/client-1.jpg') }}" alt="service">
                                </div>
                            </div>
                            <figcaption class="blog_post-catipon-inner text-center">
                                <div class="testimonial-content">
                                    <h3 class="testimonial-title"><a href="#">williamson</a></h3>
                                    <ul class="testimonial-rating">
                                        <li class="fas fa-star icon"></li>
                                        <li class="fas fa-star icon"></li>
                                        <li class="fas fa-star icon"></li>
                                        <li class="fas fa-star icon"></li>
                                        <li class="fas fa-star icon"></li>
                                    </ul>
                                    <ul class="social-icons">
                                        <li><i class="fab fa-facebook icon"></i></li>
                                        <li><i class="fab fa-linkedin icon"></i></li>
                                        <li><i class="fab fa-twitter-square icon"></i></li>
                                    </ul>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit Vivamus sed accumsan
                                        diam.
                                    </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="testimonial">
                            <div class="pic-bg">
                                <div class="pic">
                                    <img src="{{ asset('frontend/images/home-testimonial/client-2.jpg') }}" alt="service">
                                </div>
                            </div>
                            <figcaption class="blog_post-catipon-inner text-center">
                                <div class="testimonial-content">
                                    <h3 class="testimonial-title"><a href="#">williamson</a></h3>
                                    <ul class="testimonial-rating">
                                        <li class="fas fa-star icon"></li>
                                        <li class="fas fa-star icon"></li>
                                        <li class="fas fa-star icon"></li>
                                        <li class="fas fa-star icon"></li>
                                        <li class="fas fa-star icon"></li>
                                    </ul>
                                    <ul class="social-icons">
                                        <li><i class="fab fa-facebook icon"></i></li>
                                        <li><i class="fab fa-linkedin icon"></i></li>
                                        <li><i class="fab fa-twitter-square icon"></i></li>
                                    </ul>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit Vivamus sed accumsan
                                        diam.
                                    </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="testimonial">
                            <div class="pic-bg">
                                <div class="pic">
                                    <img src="{{ asset('frontend/images/home-testimonial/client-3.jpg') }}" alt="service">
                                </div>
                            </div>
                            <figcaption class="blog_post-catipon-inner text-center">
                                <div class="testimonial-content">
                                    <h3 class="testimonial-title"><a href="#">williamson</a></h3>
                                    <ul class="testimonial-rating">
                                        <li class="fas fa-star icon"></li>
                                        <li class="fas fa-star icon"></li>
                                        <li class="fas fa-star icon"></li>
                                        <li class="fas fa-star icon"></li>
                                        <li class="fas fa-star icon"></li>
                                    </ul>
                                    <ul class="social-icons">
                                        <li><i class="fab fa-facebook icon"></i></li>
                                        <li><i class="fab fa-linkedin icon"></i></li>
                                        <li><i class="fab fa-twitter-square icon"></i></li>
                                    </ul>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit Vivamus sed accumsan
                                        diam.
                                    </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="swiper-btn-center">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>
            </div>
        </div>
    </section>
    <!--tstimonial section-->
    <!--blog section-->
    
    <!--blog section-->
    <!--subscribe section-->
    <section class="subscribe-section bg-1 space">
        <div class="container">
            <div class="row">
                <div class="col-md-12 subscribe-title">
                    <h4> SUBSCRIBE FOR LATEST NEWS </h4>
                </div>
                <div class="col-md-4 mini_subscribe-btn pt-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-4 mini_subscribe-btn pt-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-4 mini_subscribe-btn pt-4">
                    <a href="#" class="submit-btn">Submit</a>
                </div>
            </div>
        </div>
    </section>
    <!--subscribe section-->

@endsection
    