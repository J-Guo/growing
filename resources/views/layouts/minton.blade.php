<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Eric Guo">

    <link rel="shortcut icon" href="">

    <title>My Growth</title>

    @yield('page-style')

    <link href="{{asset('assets/plugins/sweetalert/dist/sweetalert.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/jquery-circliful/css/jquery.circliful.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- Devicons -->
    <link href="{{asset('assets/css/devicon.min.css')}}" rel="stylesheet" type="text/css">

    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->



</head>


<body class="fixed-left">

<!-- Begin page -->
<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="#" class="logo"><i class="md md-equalizer"></i> <span>My Growth</span> </a>
            </div>
        </div>

        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">

                    <ul class="nav navbar-nav navbar-right pull-right">


                        <li class="dropdown">
                            <a href="" class="dropdown-toggle profile" aria-expanded="false"><img src="{{asset('assets/images/users/avatar-2.jpg')}}" alt="user-img" class="img-circle"> </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello,Eric</a>
                            <ul class="dropdown-menu">
                                <li><a href="logout"><i class="md md-settings-power"></i>Logout</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <div id="sidebar-menu">
                <ul>


                    <li>
                        <a href="index.html" class="waves-effect waves-primary"><i
                                    class="md md-dashboard"></i><span> Dashboard </span></a>
                    </li>

                    <li class="text-muted menu-title">Category</li>
                    <li class="has_sub">
                        <a href="#" class="waves-effect waves-primary"><i class="devicon-php-plain"></i> <span> PHP </span>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('articles/php/all')}}">all</a></li>
                            @foreach($php_subcate as $subcate)
                            <li><a href="{{url('articles/php/'.$subcate->sub_category)}}">{{$subcate->sub_category}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect waves-primary"><i class="devicon-javascript-plain"></i> <span> JavaScript </span>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('articles/javascript/all')}}">all</a></li>
                            @foreach($js_subcate as $subcate)
                                <li><a href="{{url('articles/javascript/'.$subcate->sub_category)}}">{{$subcate->sub_category}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect waves-primary"><i class="fa  fa-database"></i> <span> Database </span>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('articles/database/all')}}">all</a></li>
                            @foreach($db_subcate as $subcate)
                                <li><a href="{{url('articles/database/'.$subcate->sub_category)}}">{{$subcate->sub_category}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect waves-primary"><i class="devicon-laravel-plain"></i> <span> Laravel </span>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('articles/laravel/all')}}">All</a></li>
                            @foreach($laravel_subcate as $subcate)
                                <li><a href="{{url('articles/laravel/all')}}">{{$subcate->sub_category}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect waves-primary"><i class="fa fa-cloud"></i> <span> Web Hosting </span>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('articles/web-hosting/all')}}">all</a></li>
                            @foreach($webhosting_subcate as $subcate)
                                <li><a href="{{url('articles/web-hosting/'.$subcate->sub_category)}}">{{$subcate->sub_category}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect waves-primary"><i class="fa  fa-html5"></i> <span> Front End </span>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('articles/front-end/all')}}">all</a></li>
                            @foreach($frontend_subcate as $subcate)
                                <li><a href="{{url('articles/front-end/'.$subcate->sub_category)}}">{{$subcate->sub_category}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect waves-primary"><i class="fa  fa-code"></i> <span> Other </span>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('articles/other/all')}}">all</a></li>
                            @foreach($other_subcate as $subcate)
                                <li><a href="{{url('articles/other/'.$subcate->sub_category)}}">{{$subcate->sub_category}}</a></li>
                            @endforeach
                        </ul>
                    </li>


                    <li class="text-muted menu-title">More</li>
                    <li>
                        <a href="{{url('articles')}}" class="waves-effect waves-primary"><i
                                    class="fa  fa-file-text-o"></i><span> Articles </span></a>
                    </li>
                    <li>
                        <a href="{{url('articles/create')}}" class="waves-effect waves-primary"><i
                                    class="fa  fa-edit"></i><span> Post Article </span></a>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>


            <div class="clearfix"></div>
        </div>

    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page Content-->
                @yield('content')

            </div>
            <!-- end container -->

        </div>
        <!-- end content -->



        <!-- FOOTER -->
        <footer class="footer text-right">
            2016 © Minton.
        </footer>
        <!-- End FOOTER -->

    </div>


</div>
<!-- END wrapper -->

<script>
    var resizefunc = [];
</script>

<!-- Plugins  -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/detect.js')}}"></script>
<script src="{{asset('assets/js/fastclick.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('assets/plugins/switchery/switchery.min.js')}}"></script>

<!-- Moment  -->
<script src="{{asset('assets/plugins/moment/moment.js')}}"></script>

<!-- Counter Up  -->
<script src="{{asset('assets/plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{asset('assets/plugins/counterup/jquery.counterup.min.js')}}"></script>

<!-- Sweet Alert  -->
<script src="{{asset('assets/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>

<!-- flot Chart -->
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.selection.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>

<!-- circliful Chart -->
<script src="{{asset('assets/plugins/jquery-circliful/js/jquery.circliful.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!-- skycons -->
<script src="{{asset('assets/plugins/skyicons/skycons.min.js')}}" type="text/javascript"></script>

<!-- Todos app  -->
<script src="{{asset('assets/pages/jquery.todo.js')}}"></script>

<!-- Chat App  -->
<script src="{{asset('assets/pages/jquery.chat.js')}}"></script>

<!-- Page JS  -->
@yield('page-js')

<!-- Custom main Js -->
<script src="{{asset('assets/js/jquery.core.js')}}"></script>
<script src="{{asset('assets/js/jquery.app.js')}}"></script>

<!-- Custom JS -->
@yield('custom-js')

</body>
</html>