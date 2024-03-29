@extends('home.app')
@section('title')
Contact
@endsection

@section('content')
!--breadcrumb section-->
<div class="row breadcrumb">
    <div class="container page-title content-center">
        <div class="section-heading white animate " data-anim-type="zoomIn" data-anim-delay="600">
            <h1><span> CONTACT</span></h1>
            <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porta, dui at suscipit
                aliquam, massa ex accumsan augue, in vehicula nulla justo id lacus. </p>
            <a href="#" class="send-btn">GET FREE QUOTE <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</div>
<div class="row breadcrumb-manu">
    <div class="container">
        <ul class="title-bredcum">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li>Contact</li>
        </ul>
    </div>
</div>
<!--breadcrumb section-->

<!--contact-section-->
<div class="section-contact space1">
    <div class="container contact space2">
        <div class="row">
            <div class="col-lg-12 col-md-12 cont-desc">
                <div class="title-section t-border">
                    <h2>Get In Touch With Our Experts</h2>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 cont-desc">
                <p class="title-desc"><b>If you have any questions, Please send your message</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec sagittis nisi. Duis rhoncus
                    imperdiet tortor eu sodales Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec
                    sagittis nisi. Duis rhoncus imperdiet tortor eu sodales</p>
                <div class="row other-cont-area bg-color">
                    <div class="icon_col">
                        <span><i class="fas fa-mobile-alt icon"></i></span>
                    </div>
                    <div class="col">
                        <h4> Phone </h4>
                        <p> ( 01235-4519-00 ) </p>
                    </div>
                </div>
                <div class="row other-cont-area bg-color">
                    <div class="icon_col">
                        <span><i class="fas fa-envelope icon"></i></span>
                    </div>
                    <div class="col">
                        <h4> Email </h4>
                        <p> Transportexress@example.com </p>
                    </div>
                </div>
                <div class="row other-cont-area bg-color">
                    <div class="icon_col">
                        <span><i class="fas fa-location-arrow icon"></i></span>
                    </div>
                    <div class="col">
                        <h4> Address </h4>
                        <p> your company (256/415) state </p>
                        <p> your company state.</p>
                    </div>
                </div>

                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-12 cont-form">
                <div class="col-lg-12 col-md-12 form-desc">
                    <h3>CONTACT US</h3>
                    <h4>We Will Be Glad To Help You</h4>
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group col-md-12">
                            <textarea class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mini_subscribe-btn pt-4">
                        <a href="#" class="submit-btn">Send</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-map  animate " data-anim-type="fadeInRight" data-anim-delay="400">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96772.0600963339!2d-74.13877087497531!3d40.715223334282655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250d225bfafdd%3A0x249f013a2cd25d9!2sJersey+City%2C+NJ%2C+USA!5e0!3m2!1sen!2sin!4v1545806593722"></iframe>
    </div>
</div>
<!--contact-section-->
@endsection