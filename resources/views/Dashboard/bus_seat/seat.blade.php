<!DOCTYPE html>

<html lang="zxx">
<!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Seat view</title>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,600i,700" rel="stylesheet">
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seat/assets/front/css/bootstrap.min.css') }}">

<!--Owl Carousel Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seat/assets/front/css/plugins/owl.carousel.min.css') }}">
    <!--Slick Slider Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seat/assets/front/css/plugins/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seat/assets/front/css/plugins/slick.css') }}">
    <!--Font Awesome Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seat/assets/front/css/font-awesome.min.css') }}">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seat/assets/front/css/plugins/animate.css') }}">
    <link href="{{ asset('seat/assets/admin/css/toastr.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('seat/assets/admin/css/sweetalert.css') }}" rel="stylesheet">
    <!--Main Stylesheet-->
    <link rel="stylesheet"  href="https://ideal.thesoftking.com/bluebus/assets/front/css/style.php?color=3842fb">
    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seat/assets/front/css/homePageResponsive.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('seat/assets/front/css/jquery.autocomplete.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seat/assets/admin/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seat/assets/front/css/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seat/assets/front/css/seat-custom.css') }}">
</head>
<body class="body-class bc blog">

<!--Start Body Wrap-->
<div id="body-wrap">
    <div id="main-menu">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </nav>
    </div>

        
        <!-- @php
            print_r($actual_seat);
            if(in_array("a3", $actual_seat)){
                    echo "ase";
                }
            else{
                echo "nai";
            }
        @endphp -->
        <!-- =========== Main Ticket Booking Area Start ===================== -->
    <div id="ticket-booking">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4>BUS COMPANY</h4>
                    <div class="margin-bottom-10"></div>
                    <h6>{{ $bus_name }}</h6>
                    <div class="margin-bottom-10"></div>
                    
                    <p><strong><span class="text-danger">Route Name:</span> ROUTE 01</strong></p>
                    <div class="margin-bottom-10"></div>
                    
                    <p>Dep Time: 12:03 PM <span class="text-success">(17 Nov 2019)</span></p>
                    <div class="margin-bottom-5"></div>
                    <strong>Bus Type: </strong>{{ $bus_type }}
                    <div class="margin-bottom-5"></div>
                    <strong>Total Seat: 41</strong>
                    <div class="margin-bottom-5"></div>
                    <strong>Ticket Price : {{ $price }} Taka</strong>
                </div>
            </div>

            <div class="margin-bottom-60"></div>

            <div class="row">
                <div class="offset-md-1 col-md-5 col-sm-10 ">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="seat  ">
                                <div class='seat-body'>
                                    <span class='seat-handle-left'></span>
                                    <span class='seat-handle-right'></span>
                                    <span class='seat-bottom'></span>
                                </div>
                            </div>
                            <p>Available Seat</p>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="seat ChooseSeat selected ">
                                <div class='seat-body'>
                                    <span class='seat-handle-left'></span>
                                    <span class='seat-handle-right'></span>
                                    <span class='seat-bottom'></span>
                                </div>
                            </div>
                            <p>Selected Seat</p>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <div class="seat ladies last-seat seat occupied ChooseSeat ">
                                <div class='seat-body'>
                                    <span class='seat-handle-left'></span>
                                    <span class='seat-handle-right'></span>
                                    <span class='seat-bottom'></span>
                                </div>
                            </div>
                            <p>Booked Seat</p>
                        </div>
                    </div>
                    <div class="margin-bottom-40"></div>

                    <div class="all-seats">
                        <div class='row'>
                                @if(in_array("A1", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        A1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        A1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif

                                @if(in_array("A2", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        A2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        A2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>


                                @endif
                            <div class='col-2'>&nbsp;</div>
                             @if(in_array("A3", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        A3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        A3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            @if(in_array("A4", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        A4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        A4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                        </div>
                        <div class='row'>
                            @if(in_array("B1", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        B1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        B1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                             @if(in_array("B2", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        B2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        B2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            <div class='col-2'>&nbsp;</div>
                             @if(in_array("B3", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        B3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        B3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            @if(in_array("B4", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        B4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        B4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                        </div>
                        <div class='row'>
                             @if(in_array("C1", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        C1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        C1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            @if(in_array("C2", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        C2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        C2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif

                            <div class='col-2'>&nbsp;</div>
                            @if(in_array("C3", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        C3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        C3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            @if(in_array("C4", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        C4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        C4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            </div>
                                @endif
                             <div class='row'>
                         @if(in_array("D1", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        D1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        D1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                             @if(in_array("D2", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        D2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        D2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            <div class='col-2'>&nbsp;</div>
                           @if(in_array("D3", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        D3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        D3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                             @if(in_array("D4", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        D4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        D4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                        </div>
                        <div class='row'>
                             @if(in_array("E1", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        E1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        E1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                             @if(in_array("E2", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        E2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        E2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            <div class='col-2'>&nbsp;</div>
                             @if(in_array("E3", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        E3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        E3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                             @if(in_array("E4", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        E4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        E4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                        </div>
                        <div class='row'>
                             @if(in_array("F1", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        F1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        F1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                             @if(in_array("F2", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        F2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        F2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            <div class='col-2'>&nbsp;</div>
                             @if(in_array("F3", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        F3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        F3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            @if(in_array("F4", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        F4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        F4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                        </div>
                        <div class='row'>
                             @if(in_array("G1", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        G1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        G1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                             @if(in_array("G2", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        G2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        G2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            <div class='col-2'>&nbsp;</div>
                             @if(in_array("G3", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        G3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        G3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                             @if(in_array("G4", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        G4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        G4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                        </div>
                        <div class='row'>
                             @if(in_array("H1", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        H1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        H1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                             @if(in_array("H2", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        H2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        H2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            <div class='col-2'>&nbsp;</div>
                             @if(in_array("H3", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        H3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        H3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                             @if(in_array("H4", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        H4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        H4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                        </div>
                        <div class='row'>
                             @if(in_array("I1", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        I1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        I1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            @if(in_array("I2", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        I2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        I2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            <div class='col-2'>&nbsp;</div>
                             @if(in_array("I3", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        I3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        I3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                             @if(in_array("I4", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        I4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        I4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                        </div>
                        <div class='row'>
                             @if(in_array("J1", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        J1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        J1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                             @if(in_array("J2", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        J2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        J2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                            <div class='col-2'>&nbsp;</div>
                             @if(in_array("J3", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        J3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        J3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                             @if(in_array("J4", $actual_seat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        J4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                                @else
                            <div class='col-2'>
                                 <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        J4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                                @endif
                        </div>
                        <div class='row'>
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat last-seat-21 ' data-item=''>
                                    <div class='seat-body'>
                                        M
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">

                <form action="{{ route('book_ticket') }}" class="price-details" id="bookingFrm" method="post" accept-charset="utf-8">
                    <!-- <input type="text" name="stoppage" value="{{ $stoppage }}"> -->
                    @csrf
                    <div class="form-group">
                        <label><strong>Choose Boarding Point <span class="text-danger">*</span></strong></label>
                        <select name="stoppage" id="stoppage" class="form-control form-control-lg boarding_point">
                            <option value="">Boarding Point</option>
                            @foreach($stoppage as $stoppages)
                            <option value="{{$stoppages->stoppage_id}}">{{ App\Terminal::findOrFail($stoppages->stoppage_id)->stoppage }}</option>
                            @endforeach
                        </select>
                    </div>


                                            <div class="form-group">
                            <h4> Facilities</h4>
                            <div id="facilities">
                            	<div class="funkyradio">
                                    <div class="funkyradio-default">
                                        <input type="radio" checked/>
                                        <label>Free Breakfast</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <div class="table-responsive ">
                        <table class="table table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <td class="text-right" style="width: 30%;">Seat(s)</td>
                                <th id="seatPreview">---</th>
                            </tr>
                            <tr>
                                <td class="text-right"><b> Total</b></td>
                                <th id="grandTotalPreview">0</th>
                            </tr>
                            </tbody>
                        </table>

                        <input type="hidden" name="name" value="{{ $name }}">
                        <input type="hidden" name="phone"
                               value="{{$phone}}">
                        <input type="hidden" name="bus_name" value="{{ $bus_name }}">
                        <input type="hidden" name="bus_type" value="{{ $bus_type }}">
                        <input type="hidden" name="seat_number">
                        <input type="hidden" name="date"
                               value="{{ $date }}">
                        <input type="hidden" name="time" value="{{ $time }}">
                        <input type="hidden" name="chassis_no" value="{{ $chassis_no }}">
                        <input type="hidden" name="terminal_name" value="{{ $terminal_name}}">
                        <input type="hidden" name="district_name" value="{{ $district_name}}">
                        <input type="hidden" name="price" value="{{ $price}}">
                        <input type="hidden" name="total_seat" value="{{ $total_seat}}">
                        <input type="hidden" name="total_price">

                    </div>
                    <button id="submit-btn" class="btn btn-block">Continue</button>
                </form>

                
                
        </div>


    </div>
    </div>
</div>
 <!-- =========== Main Ticket Booking Area End ===================== -->
    <div class="margin-bottom-60"></div>



<!--jQuery JS-->
<script src="{{ asset('seat/assets/front/js/jquery.2.1.2.min.js') }}"></script>
<!--Bootstrap JS-->
<script src="{{ asset('seat/assets/front/js/bootstrap.min.js') }}"></script>
<!--Counter JS-->
<script src="{{ asset('seat/assets/front/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('seat/assets/front/js/plugins/jquery.counterup.min.js') }}"></script>

<script src="{{ asset('seat/assets/admin/js/toastr.min.js') }}"></script>
<script src="{{ asset('seat/assets/admin/js/sweetalert.js') }}"></script>


    <script src="{{ asset('seat/assets/front/js/jquery.autocomplete.js') }}"></script>
    <script src="{{ asset('seat/assets/admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('seat/assets/front/js/flatpickr.js') }}"></script>
<!--Owl Carousel JS-->
<script src="{{ asset('seat/assets/front/js/plugins/owl.carousel.min.js') }}"></script>
<!--Venobox JS-->
<script src="{{ asset('seat/assets/front/js/plugins/venobox.min.js') }}"></script>
<!--Slick Slider JS-->
<script src="{{ asset('seat/assets/front/js/plugins/slick.min.js') }}"></script>
<!--Main-->
<script src="{{ asset('seat/assets/front/js/custom.js') }}"></script>
<script>
        $(document).ready(function () {

            $('.boarding_point').select2();


            /*
            *------------------------------------------------------
            * @function: findBookingInformation()
            * @return    : location, facilities, seatsList
            *------------------------------------------------------
            */
            // var name = $('input[name=name]');
            // var name = $('input[name=phone]');
            var total_seat = $('input[name=total_seat]');
            var total_price = $('input[name=total_price]');
            var seat_number = $('input[name=seat_number]');

            var price = $('input[name=price]').val();

            var seatPreview = $('#seatPreview');
            var pricePreview = $('#pricePreview');
            var grandTotalPreview = $('#grandTotalPreview');
            var outputPreview = $('#outputPreview');

            if (total_seat.val() == '') {
                $("#submit-btn").attr('disabled', true);
            }

            /*
            *------------------------------------------------------
            * Choose seat(s)
            * @function: findPriceBySeat
            * @return  : selected seat(s), price and group price
            *------------------------------------------------------
            */

            $('body').on('click', '.ChooseSeat', function () {
                var seat = $(this);
                if (seat.attr('data-item') != "selected") {
                    seat.removeClass('occupied').addClass('selected').attr('data-item', 'selected');
                } else if (seat.attr('data-item') == "selected") {
                    seat.removeClass('selected').addClass('occupied').attr('data-item', '');
                }
                //reset seat serial for each click
                var seatSerial = "";
                var countSeats = 0;

                $("div[data-item=selected]").each(function (i, x) {
                    countSeats = i + 1;
                    seatSerial += $(this).text().trim() + ", ";
                });

                total_price.val(countSeats * price);
                $("#grandTotalPreview").text((countSeats * price) + " Tk");
                total_seat.val(countSeats);
                seat_number.val(seatSerial);
                seatPreview.html(seatSerial);

                if (countSeats > 0) {
                    $("#submit-btn").attr('disabled', false);
                } else {
                    $("#submit-btn").attr('disabled', true);
                }
            });


            
        });
    </script>
</body>
</html>
