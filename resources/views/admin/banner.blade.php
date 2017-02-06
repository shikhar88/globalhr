@extends('admin.template')
@section('content')
    <div class="main-content">
        <div class="container">
            <!-- start: PAGE HEADER -->
            <!-- start: TOOLBAR -->
            <div class="toolbar row">
                <div class="col-sm-6 hidden-xs">
                    <div class="page-header">
                        <h1>Dashboard <small>overview &amp; stats </small></h1>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="toolbar-tools pull-right">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right">
                            <!-- start: TO-DO DROPDOWN -->
                            <li class="menu-search">
                                <a href="" onclick="saveContent();">
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
                <form class="form-horizontal" action="#">
                    <div class="form-group">
                    <div class="col-sm-12">
                        <label>
                            Image Upload
                        </label>
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail"></div>
                            <div>
															<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
																<input type="file">
															</span>
                                <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                    <i class="fa fa-times"></i> Remove
                                </a>
                            </div>
                        </div>
                        <div class="alert alert-warning">
                            <span class="label label-warning">NOTE!</span>
                            <span> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead. </span>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            <!-- end: PAGE CONTENT-->
        </div>
        <div class="subviews">
            <div class="subviews-container"></div>
        </div>
    </div>
@endsection

@section('javascript')

@endsection