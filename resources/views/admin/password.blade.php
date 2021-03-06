
@extends('admin.template')
@section('content')
    <div class="main-content">
        <div class="container">
            <!-- start: PAGE HEADER -->
            <!-- start: TOOLBAR -->
            <div class="toolbar row">
                <div class="col-sm-6 hidden-xs">
                    <div class="page-header">
                        <h1>Change password
                        </h1>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    {{--<div class="toolbar-tools pull-right">--}}
                        {{--<!-- start: TOP NAVIGATION MENU -->--}}
                        {{--<ul class="nav navbar-right">--}}
                            {{--<!-- start: TO-DO DROPDOWN -->--}}
                            {{--<li class="menu-search">--}}
                                {{--<a href="" onclick="updatePassowrd();">--}}
                                    {{--<i class="fa fa-floppy-o 2x"></i> SAVE--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- end: TOP NAVIGATION MENU -->--}}
                    {{--</div>--}}
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
                                Admin
                            </a>
                        </li>
                        <li class="active">
                            Password
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
                            <form role="form" class="form-horizontal" id="form" method="POST" action="/admin/passwordchange">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-2">
                                        Old Password <span class="symbol required"></span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="password" name="oldPassword" placeholder="Enter old password" id="form-field-2" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-2">
                                        Password <span class="symbol required"></span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password" id="password" minlength="7" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-2">
                                        Confirm Password <span class="symbol required"></span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password_again" name="password_again" minlength="7" required>
                                    </div>
                                </div>
                                    <input class="btn btn-block" type="submit" style="width: 15%;margin-left: 44%">

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
    {{--<script src="../assets/js/form-validation.js"></script>--}}
    <script type="text/javascript">

    </script>
@endsection