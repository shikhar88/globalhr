@extends('admin.template')
@section('content')
    <div class="main-content">
        <div class="container">
            <!-- start: PAGE HEADER -->
            <!-- start: TOOLBAR -->
            <div class="toolbar row">
                <div class="col-sm-6 hidden-xs">
                    <div class="page-header">
                        <h1>Dashboard
                            <small>overview &amp; stats</small>
                        </h1>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="toolbar-tools pull-right">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right">
                            <!-- start: TO-DO DROPDOWN -->
                            <li class="menu-search">
                                <a href="" onclick="saveContact();">
                                    <i class="fa fa-floppy-o 2x"></i> SAVE
                                </a>
                            </li>
                        </ul>
                        <!-- end: TOP NAVIGATION MENU -->
                    </div>
                </div>
            </div>
            <!-- end: TOOLBAR -->
            <!-- end: PAGE HEADER -->
            <!-- start: BREADCRUMB -->
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="active">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div>
            <!-- end: BREADCRUMB -->
            <!-- start: PAGE CONTENT -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- start: TEXT FIELDS PANEL -->
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Text <span class="text-bold">Fields</span></h4>
                        </div>
                        <div class="panel-body">
                            <form role="form" class="form-horizontal" id="contactForm">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Location
                                    </label>
                                    <div class="col-sm-6">
													<span class="input-icon">
														<input type="text" placeholder="Location"  class="form-control" name="location" value="{{$data->location}}">
														<i class="fa fa-user"></i> </span>
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Contact
                                    </label>
                                    <div class="col-sm-6">
													<span class="input-icon">
														<input type="text" placeholder="Contact detail"  class="form-control" name="contact" value="{{$data->contact}}">
														<i class="fa fa-user"></i> </span>
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Email
                                    </label>
                                    <div class="col-sm-6">
													<span class="input-icon">
														<input type="email" placeholder="email@email.com"  name="email1" class="form-control" value="{{$data->email1}}">
														<i class="fa fa-user"></i> </span>
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                    </label>
                                    <div class="col-sm-6">
													<span class="input-icon">
														<input type="email" placeholder="email@email.com"  name="email2" class="form-control" value="{{$data->email2}}">
														<i class="fa fa-user"></i> </span>
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                       Facebook
                                    </label>
                                    <div class="col-sm-6">
													<span class="input-icon">
														<input type="text" placeholder="fb.com"  name="fb" class="form-control" value="{{$data->fb}}">
														<i class="fa fa-user"></i> </span>
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Twitter
                                    </label>
                                    <div class="col-sm-6">
													<span class="input-icon">
														<input type="text" placeholder="twitter.com" name="twitter"  class="form-control" value="{{$data->twitter}}">
														<i class="fa fa-user"></i> </span>
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                       Google+
                                    </label>
                                    <div class="col-sm-6">
													<span class="input-icon">
														<input type="text" placeholder="google.com" name="googleplus" class="form-control" value="{{$data->googleplus}}">
														<i class="fa fa-user"></i> </span>
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end: TEXT FIELDS PANEL -->
                </div>
            </div>

            <!-- end: PAGE CONTENT-->
        </div>
        <div class="subviews">
            <div class="subviews-container"></div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript">
        function saveContact() {
            var data = $("#contactForm").serialize();
            $.ajax({
                url:"/admin/companydetail?saveContact=1",
                data:data,
                method:'get',
                success:function () {
                    showToast('success','Content has been saved');
                },
                error:function () {
                    showToast('error','Error while saving content. Try again.');
                }
            });
        }
    </script>
@endsection