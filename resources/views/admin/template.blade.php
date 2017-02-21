<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
    <title>Admin panel</title>
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/iCheck/skins/all.css">
    <link rel="stylesheet" href="../assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/plugins/animate.css/animate.min.css">
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
    <link rel="stylesheet" href="../assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../assets/plugins/owl-carousel/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../assets/plugins/owl-carousel/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="../assets/plugins/summernote/dist/summernote.css">
    <link rel="stylesheet" href="../assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
    <link rel="stylesheet" href="../assets/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="../assets/plugins/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="../assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
    {{--<link rel="stylesheet" href="../assets/plugins/DataTables/media/css/DT_bootstrap.css">--}}
    <link rel="stylesheet" href="../assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
    <link rel="stylesheet" href="../assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="stylesheet" href="../assets/plugins/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" href="../assets/plugins/nvd3/nv.d3.min.css">
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- start: CORE CSS -->
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/styles-responsive.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/themes/theme-default.css" type="text/css" id="skin_color">
    <link rel="stylesheet" href="../assets/css/print.css" type="text/css" media="print"/>
    <!-- end: CORE CSS -->
    <link rel="shortcut icon" href="favicon.ico" />
    @yield('css')
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body>

<div class="main-wrapper">
    <!-- start: TOPBAR -->
    <header class="topbar navbar navbar-inverse navbar-fixed-top inner">
        <!-- start: TOPBAR CONTAINER -->
        <div class="container" style="min-height: 40px;">
            <div class="navbar-header">
                <a class="sb-toggle-left hidden-md hidden-lg" href="#main-navbar">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- start: LOGO -->
                <a class="navbar-brand" href="/">
                    <img style="max-height: 40px;" src="{{$logo}}" alt="Rapido"/>
                </a>
                <!-- end: LOGO -->
            </div>
            <div class="topbar-tools">
                <!-- start: TOP NAVIGATION MENU -->
                <ul class="nav navbar-right">
                    <!-- start: USER DROPDOWN -->
                    <li class="dropdown current-user">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                            <img src="../assets/images/avatar-1-small.jpg" class="img-circle" alt=""> <span class="username hidden-xs">Admin User</span> <i class="fa fa-caret-down "></i>
                        </a>
                        <ul class="dropdown-menu dropdown-dark">
                            <li>
                                <a href="/admin/passwordchange">
                                    Change password
                                </a>
                            </li>
                            <li>
                                <a href="/logout">
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- end: TOP NAVIGATION MENU -->
            </div>
        </div>
        <!-- end: TOPBAR CONTAINER -->
    </header>
    <!-- end: TOPBAR -->
    <!-- start: PAGESLIDE LEFT -->
    <a class="closedbar inner hidden-sm hidden-xs" href="#">
    </a>
    <nav id="pageslide-left" class="pageslide inner">
        <div class="navbar-content">
            <!-- start: SIDEBAR -->
            <div class="main-navigation left-wrapper transition-left">
                <div class="navigation-toggler hidden-sm hidden-xs">
                    <a href="#main-navbar" class="sb-toggle-left">
                    </a>
                </div>
                <div class="user-profile border-top padding-horizontal-10 block">
                    <div class="inline-block">
                        <img src="../assets/images/avatar-1.jpg" alt="">
                    </div>
                    <div class="inline-block">
                        <h5 class="no-margin"> Welcome </h5>
                        <h4 class="no-margin"> Admin User </h4>
                    </div>
                </div>
                <!-- start: MAIN NAVIGATION MENU -->
                <ul class="main-navigation-menu">
                    <li class="active open">
                        <a href="/admin"><i class="fa fa-home"></i> <span class="title"> Dashboard </span><span class="label label-default pull-right ">LABEL</span> </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="fa fa-desktop"></i> <span class="title"> Layouts </span><i class="icon-arrow"></i> </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:;">
                                    <span class="title"> Upload images </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="title"> Sidebar Closed </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/admin/companydetail"><i class="fa fa-bar-chart-o"></i> <span class="title">Company detail</span> </a>
                    </li>
                    <li>
                        <a href="/admin"><i class="fa fa-bar-chart-o"></i> <span class="title">Charts</span> </a>
                    </li>
                    <li>
                        <a href="/admin/banner"><i class="fa fa-bar-chart-o"></i> <span class="title">Banner setting</span> </a>
                    </li>
                    <li>
                        <a href="/admin/aboutus"><i class="fa fa-bar-chart-o"></i> <span class="title">About us</span> </a>
                    </li>
                    <li>
                        <a href="/admin/study"><i class="fa fa-bar-chart-o"></i> <span class="title">Study abroad content</span> </a>
                    </li>
                    <li>
                        <a href="/admin/studyimage"><i class="fa fa-bar-chart-o"></i> <span class="title">Study abroad images</span> </a>
                    </li>
                    <li>
                        <a href="/admin/logo"><i class="fa fa-bar-chart-o"></i> <span class="title">Logo & Certification</span> </a>
                    </li>
                    <li>
                        <a href="/admin/services"><i class="fa fa-bar-chart-o"></i> <span class="title">Service setting</span> </a>
                    </li>
                </ul>
                <!-- end: MAIN NAVIGATION MENU -->
            </div>
            <!-- end: SIDEBAR -->
        </div>
        <div class="slide-tools">
            <div class="col-xs-6 text-right no-padding">
                <a class="btn btn-sm log-out text-right" href="/logout">
                    <i class="fa fa-power-off"></i> Log Out
                </a>
            </div>
        </div>
    </nav>
    <!-- end: PAGESLIDE LEFT -->
    <!-- start: PAGESLIDE RIGHT -->
    <!-- end: PAGESLIDE RIGHT -->
    <!-- start: MAIN CONTAINER -->
    <div class="main-container inner">
        <!-- start: PAGE -->
    @yield('content')
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
   </div>
<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
<script src="../assets/plugins/respond.min.js"></script>
<script src="../assets/plugins/excanvas.min.js"></script>
<script type="text/javascript" src="../assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="../assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
<!--<![endif]-->
<script src="../assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/blockUI/jquery.blockUI.js"></script>
<script src="../assets/plugins/iCheck/jquery.icheck.min.js"></script>
<script src="../assets/plugins/moment/min/moment.min.js"></script>
<script src="../assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
<script src="../assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
<script src="../assets/plugins/bootbox/bootbox.js"></script>
<script src="../assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js"></script>
<script src="../assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
<script src="../assets/plugins/jquery.appear/jquery.appear.js"></script>
<script src="../assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<script src="../assets/plugins/velocity/jquery.velocity.min.js"></script>
<script src="../assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
<script src="../assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script src="../assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
<script src="../assets/plugins/toastr/toastr.js"></script>
<script src="../assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
<script src="../assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
<script src="../assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
<script src="../assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
<script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="../assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="../assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
{{--<script src="../assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>--}}
{{--<script src="../assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>--}}
<script src="../assets/plugins/truncate/jquery.truncate.js"></script>
<script src="../assets/plugins/summernote/dist/summernote.min.js"></script>
<script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="../assets/js/subview.js"></script>
{{--<script src="../assets/js/subview-examples.js"></script>--}}
<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="../assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="../assets/plugins/nvd3/lib/d3.v3.js"></script>
<script src="../assets/plugins/nvd3/nv.d3.min.js"></script>
<script src="../assets/plugins/nvd3/src/models/historicalBar.js"></script>
<script src="../assets/plugins/nvd3/src/models/historicalBarChart.js"></script>
<script src="../assets/plugins/nvd3/src/models/stackedArea.js"></script>
<script src="../assets/plugins/nvd3/src/models/stackedAreaChart.js"></script>
<script src="../assets/plugins/jquery.sparkline/jquery.sparkline.js"></script>
{{--<script src="../assets/plugins/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>--}}
<script src="../assets/js/index.js"></script>

<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CORE JAVASCRIPTS  -->
<script src="../assets/js/main.js"></script>

<!-- end: CORE JAVASCRIPTS  -->

@yield('javascript')
<script>
    jQuery(document).ready(function() {
        Main.init();
    });
    function showToast(type,msg){
        toastr.options = {
            "closeButton": false,
            "positionClass": "toast-bottom-full-width",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "10000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        toastr[type](msg);

    }
</script>
</body>
<!-- end: BODY -->
</html>