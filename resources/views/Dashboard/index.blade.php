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
                                <div class="counter-title">Web Projects</div>
                                <h5 class="sc-counter mt-3">1228</h5>
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
                                    <span class="icon icon-mail-envelope-open s-48"></span>
                                </div>
                                <div class="counter-title ">Premium Themes</div>
                                <h5 class="sc-counter mt-3">1228</h5>
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
                                    <span class="icon icon-stop-watch3 s-48"></span>
                                </div>
                                <div class="counter-title">Support Requests</div>
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
                                    <span class="icon icon-inbox-document-text s-48"></span>
                                </div>
                                <div class="counter-title">Support Requests</div>
                                <h5 class="sc-counter mt-3">550</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    <!-- Daily Sale Report-->
                    <div class="col-md-5">
                        <div class="card my-3 no-b ">
                            <div class="card-header white b-0 p-3">
                                <div class="card-handle">
                                    <a data-toggle="collapse" href="#salesCard" aria-expanded="false"
                                       aria-controls="salesCard">
                                        <i class="icon-menu"></i>
                                    </a>
                                </div>
                                <h4 class="card-title">Daily Sale Report</h4>
                                <small class="card-subtitle mb-2 text-muted">Items purchase by users.</small>
                            </div>
                            <div class="collapse show" id="salesCard">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover earning-box">
                                            <thead class="bg-light">
                                            <tr>
                                                <th colspan="2">Client Name</th>
                                                <th>Item Purchased</th>
                                                <th>Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="{{ asset('dashboard/assets/img/dummy/u6.png') }}" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="{{ asset('dashboard/assets/img/dummy/u7.png') }}" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="{{ asset('dashboard/assets/img/dummy/u9.png') }}" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="{{ asset('dashboard/assets/img/dummy/u11.png') }}" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="{{ asset('dashboard/assets/img/dummy/u12.png') }}" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Today Tab End-->
            <!--Yesterday Tab Start-->
            <div class="tab-pane animated fadeInUpShort" id="v-pills-2">
                <div class="row my-3">
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-note-list text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">Web Projects</div>
                                <h5 class="sc-counter mt-3">3000</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-mail-envelope-open s-48"></span>
                                </div>
                                <div class="counter-title ">Premium Themes</div>
                                <h5 class="sc-counter mt-3">1000</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-stop-watch3 s-48"></span>
                                </div>
                                <div class="counter-title">Support Requests</div>
                                <h5 class="sc-counter mt-3">600</h5>
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
                                    <span class="icon icon-inbox-document-text s-48"></span>
                                </div>
                                <div class="counter-title">Support Requests</div>
                                <h5 class="sc-counter mt-3">525</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="white p-5 r-5">
                            <div style="height: 528px">
                                <canvas
                                        data-chart="line"
                                        data-dataset="[
                                                [0,528,228,728,528,1628,0],
                                                [0,628,228,1228,428,1828,0],
                                                ]"
                                        data-labels="['Blue','Yellow','Green','Purple','Orange','Red','Indigo']"
                                        data-dataset-options="[
                                            { label:'Sales', borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                            { label:'Orders', borderColor:  'rgba(255,99,132,1)', backgroundColor: 'rgba(255, 99, 132, 1)' }]"
                                        data-options="{
                                                maintainAspectRatio: false,
                                                legend: {
                                                    display: true
                                                },
                                    
                                                scales: {
                                                    xAxes: [{
                                                        display: true,
                                                        gridLines: {
                                                            zeroLineColor: '#eee',
                                                            color: '#eee',
                                                      
                                                            borderDash: [5, 5],
                                                        }
                                                    }],
                                                    yAxes: [{
                                                        display: true,
                                                        gridLines: {
                                                            zeroLineColor: '#eee',
                                                            color: '#eee',
                                                            borderDash: [5, 5],
                                                        }
                                                    }]
                                    
                                                },
                                                elements: {
                                                    line: {
                                                    
                                                        tension: 0.4,
                                                        borderWidth: 1
                                                    },
                                                    point: {
                                                        radius: 2,
                                                        hitRadius: 10,
                                                        hoverRadius: 6,
                                                        borderWidth: 4
                                                    }
                                                }
                                            }">
                                </canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Yesterday Tab Start-->
        </div>
    </div>
</div>
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>

@endsection


