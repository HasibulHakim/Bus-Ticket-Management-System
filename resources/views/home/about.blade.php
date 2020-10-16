@extends('home.app')
@section('title')
About
@endsection

@section('content')
<!--breadcrumb section-->
<div class="row breadcrumb">
    <div class="container page-title content-center">
        <div class="section-heading white animate " data-anim-type="zoomIn" data-anim-delay="600">
            <h1><span> ABOUT OUR COMPANY </span></h1>
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
            <li> /</li>
            <li>About Us</li>
        </ul>
    </div>
</div>
<!--breadcrumb section-->

<!--About section-->
<section class="faq-section about-us space" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="title-section t-border pb-60">
                    <h2>ABOUT US</h2>
                    <p class="title-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec sagittis
                        nisi. Duis rhoncus</p>
                </div>
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1"
                               aria-expanded="true"
                               aria-controls="collapseOne1">
                                <h5 class="mb-0"> ABOUT US </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porta, dui at suscipit
                                    aliquam, massa ex accumsan augue, in vehicula nulla justo id lacus. Proin libero
                                    magna, malesuada quis odio in, ultrices tempus turpis. Ut feugiat eros nec lorem
                                    commodo semper. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingTwo2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                               aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="mb-0">
                                    OUR MISSION </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec sagittis nisi. Duis
                                rhoncus imperdiet tortor eu sodales
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingThree3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx"
                               href="#collapseThree3"
                               aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="mb-0">
                                    WAREHOUSEING SOLUTION </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec sagittis nisi. Duis
                                rhoncus imperdiet tortor eu sodales Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Aenean nec sagittis nisi. Duis rhoncus imperdiet tortor eu sodales
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 faq-img">
                <div class="img-thumbnail">
                    <img class="img-fluid" src="images/all-img/about.png" alt="about">
                </div>
            </div>
        </div>
    </div>
</section>
<!--faq section-->


@endsection
