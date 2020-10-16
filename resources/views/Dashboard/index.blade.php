@extends('dashboard.app')
@section('title')
Admin Dashboard
@endsection
@section('content')
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <!--Today Tab Start-->
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="row my-3">
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-note-list text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">Total Sell</div>
                                @php
                                $total_sell = DB::table('ticket_bookings')->sum('total_price');
                                @endphp
                                <h5 class="sc-counter mt-3">{{ $total_sell }}</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-note-list text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title ">Total Booking</div>
                                <h5 class="sc-counter mt-3">{{ App\TicketBooking::count() }}</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-note-list text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">Daily Sell</div>
                                <h5 class="sc-counter mt-3">1228</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-note-list text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">Monthly Sell</div>
                                <h5 class="sc-counter mt-3">550</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>

@endsection


