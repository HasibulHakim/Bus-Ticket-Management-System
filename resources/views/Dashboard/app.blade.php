<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('dashboard/assets/img/basic/favicon.ico') }}" type="image/x-icon">
    <title>
        @yield('title')
    </title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/app.css') }}">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <h3>OBTMS</h3>
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <!-- <div class="float-left image">
                        <img class="user_avatar" src="{{ asset('dashboard/assets/img/dummy/u2.png') }}" alt="User Image">
                    </div> -->
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">{{App\User::findOrFail(Auth::id())->name}}</h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="index.html" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Profile
                        </a>
                        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                class="mr-2 icon-cogs text-yellow"></i>Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>MAIN NAVIGATION</strong></li>
            <li class="treeview"><a href="{{ route('dashboard_home') }}">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Dashboard</span></a>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Single Info Input</span> <i class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/bus_insert_form') }}"><i class="icon icon-folder5"></i>Bus View</a>
                    </li>
                    <li><a href="{{ url('/admin/bus_insert_form') }}"><i class="icon icon-folder5"></i>Add bus </a>
                    </li>
                    <li><a href="{{ url('/admin/date_insert_form') }}"><i class="icon icon-folder5"></i>Date View</a>
                    </li>
                    <li><a href="{{ url('/admin/form') }}"><i class="icon icon-folder5"></i>Form View</a>
                    </li>
                    <li><a href="{{ url('/admin/time') }}"><i class="icon icon-folder5"></i>Time View</a>
                    </li>
                    <li><a href="{{ url('/admin/to') }}"><i class="icon icon-folder5"></i>To View</a>
                    </li>
                    <li><a href="{{ route('chassis_no') }}"><i class="icon icon-folder5"></i>Chassis No</a>
                    </li>
                    <li><a href="{{ url('/admin/bus_type') }}"><i class="icon icon-folder5"></i>Coach Type</a>
                    </li>
                    <li><a href="{{ url('/admin/terminal') }}"><i class="icon icon-folder5"></i>Terminal View</a>
                    </li>
                    <li><a href="{{ url('/admin/price') }}"><i class="icon icon-folder5"></i>Price View</a></li>
                    <li><a href="{{ url('/admin/total_seat') }}"><i class="icon icon-folder5"></i>Total Seat View</a></li>
                    <li><a href="{{ url('/admin/register_stoppage/index') }}"><i class="icon icon-folder5"></i>Register Stoppage</a>
                    </li>
                    <li><a href="{{ url('/admin/businfo') }}"><i class="icon icon-folder5"></i>Bus Information Detail</a></li>
                    
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>View Info<i
                    class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/user/bus_list/view') }}"><i class="icon icon-folder5"></i>Bus List View</a>
                    </li>
                    <li><a href="{{ route('view_bus') }}"><i class="icon icon-folder5"></i>Bus Name View</a>
                    </li>
                    <li><a href="{{ route('date_view') }}"><i class="icon icon-folder5"></i>Date View</a>
                    </li>
                    <li><a href="{{ route('time_view') }}"><i class="icon icon-folder5"></i>Time View</a>
                    </li>
                    <li><a href="{{ route('form_view') }}"><i class="icon icon-folder5"></i>From View</a>
                    </li>
                    <li><a href="{{ route('to_view') }}"><i class="icon icon-folder5"></i>To View</a>
                    </li>
                    <li><a href="{{ route('bus_type_view') }}"><i class="icon icon-folder5"></i>Bus Type View</a>
                    </li>
                    <li><a href="{{ route('terminal_view') }}"><i class="icon icon-folder5"></i>Terminal View</a>
                    </li>
                    <li><a href="{{ route('price_view') }}"><i class="icon icon-folder5"></i>Price View</a>
                    </li>
                    <li><a href="{{ route('chassis_no_view') }}"><i class="icon icon-folder5"></i>Chassis No View</a>
                    </li>
                    <li><a href="{{ url('/admin/users') }}"><i class="icon icon-user"></i> Users Info </a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Bus Information View<i
                    class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('bus_info_view') }}"><i class="icon icon-folder5"></i>Bus Information</a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="{{ route('agent_form') }}"><i class="icon icon-account_box light-green-text s-18"></i>Add User</li>
            <li class="treeview"><a href="{{ route('report_form') }}"><i class="icon icon-account_box light-green-text s-18"></i>Report Generate</li>
            
        </ul>
    </section>
</aside>
<!--Sidebar End-->
<div class="has-sidebar-left">
    <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
            <div class="search-bar">
                <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                       placeholder="start typing...">
            </div>
            <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
               aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
        </div>
    </div>
</div>
    <div class="sticky">
        <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
            <div class="relative">
                <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                    <i></i>
                </a>
            </div>
            <!--Top Menu Start -->
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <!-- Messages-->
        <li class="dropdown custom-dropdown messages-menu">
            <a href="#" class="nav-link" data-toggle="dropdown">
                   <i class="icon-message "></i>
                   <span class="badge badge-success badge-mini rounded-circle">4</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu pl-2 pr-2">
                        <!-- start message -->
                        <li>
                            <a href="#">
                                <div class="avatar float-left">
                                    <img src="{{ asset('dashboard/assets/img/dummy/u4.png') }}" alt="">
                                    <span class="avatar-badge busy"></span>
                                </div>
                                <h4>
                                    Support Team
                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                </h4>
                                <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                    </ul>
                </li>
                        <!-- end message -->
            </ul>
        </li>
        <!-- Notifications -->
        <li class="dropdown custom-dropdown notifications-menu">
            <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-notifications "></i>
                <span class="badge badge-danger badge-mini rounded-circle">4</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li class="header">You have 10 notifications</li>
                <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                        <li>
                            <a href="#">
                                <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer p-2 text-center"><a href="#">View all</a></li>
            </ul>
        </li>
        <li>
            <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
               aria-controls="navbarToggleExternalContent"
               aria-expanded="false" aria-label="Toggle navigation">
                <i class=" icon-search3 "></i>
            </a>
        </li>
        <!-- Right Sidebar Toggle Button -->
        <li>
            <a class="nav-link ml-2" data-toggle="control-sidebar">
                <i class="icon-tasks "></i>
            </a>
        </li>
        <!-- User Account-->
        <li class="dropdown custom-dropdown user user-menu ">
            <a href="#" class="nav-link" data-toggle="dropdown">
                <img src="assets/img/dummy/u8.png" class="user-image" alt="User Image">
                <i class="icon-more_vert "></i>
            </a>
            <div class="dropdown-menu p-4 dropdown-menu-right">
                <div class="row box justify-content-between my-4">
                    <div class="col">
                        <a href="#">
                            <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Apps</div>
                        </a>
                    </div>
                    <div class="col"><a href="#">
                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                        <div class="pt-1">Profile</div>
                    </a></div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Settings</div>
                        </a>
                    </div>
                </div>
                <div class="row box justify-content-between my-4">
                    <div class="col">
                        <a href="#">
                            <i class="icon-star light-green lighten-1 avatar  r-5"></i>
                            <div class="pt-1">Favourites</div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-save2 orange accent-1 avatar  r-5"></i>
                            <div class="pt-1">Saved</div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-perm_data_setting grey darken-3 avatar  r-5"></i>
                            <div class="pt-1">Settings</div>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row box justify-content-between my-4">
                    <div class="col">
                        <a href="#">
                            <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Apps</div>
                        </a>
                    </div>
                    <div class="col"><a href="#">
                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                        <div class="pt-1">Profile</div>
                    </a></div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Settings</div>
                        </a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
        </div>
    </div>
</div>
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Dashboard
                    </h4>
                </div>
            </div>
        </div>
    </header>

@yield('content')


<!--/#app -->
<script src="{{ asset('dashboard/assets/js/app.js') }}"></script>




<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>

<!-- Mirrored from xvelopers.com/demos/html/paper-panel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2019 19:49:26 GMT -->
</html>