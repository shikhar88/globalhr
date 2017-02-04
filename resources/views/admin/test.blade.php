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
            <div class="col-md-6 col-lg-3 col-sm-6">
                <div class="panel panel-default panel-white core-box">
                    <div class="panel-tools">
                        <a href="#" class="btn btn-xs btn-link panel-close">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                    <div class="panel-body no-padding">
                        <div class="partition-green padding-20 text-center core-icon">
                            <i class="fa fa-bar-chart-o fa-2x icon-big"></i>
                        </div>
                        <div class="padding-20 core-content">
                            <h3 class="title block no-margin">SEO</h3>
                            <span class="subtitle"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                        </div>
                    </div>
                    <div class="panel-footer clearfix no-padding">
                        <div class=""></div>
                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-green" data-toggle="tooltip" data-placement="top" title="More Options"><i class="fa fa-cog"></i></a>
                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-blue" data-toggle="tooltip" data-placement="top" title="Add Content"><i class="fa fa-plus"></i></a>
                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6">
                <div class="panel panel-default panel-white core-box">
                    <div class="panel-tools">
                        <a href="#" class="btn btn-xs btn-link panel-close">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                    <div class="panel-body no-padding">
                        <div class="partition-blue padding-20 text-center core-icon">
                            <i class="fa fa-code fa-2x icon-big"></i>
                        </div>
                        <div class="padding-20 core-content">
                            <h3 class="title block no-margin">Programming</h3>
                            <span class="subtitle"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                        </div>
                    </div>
                    <div class="panel-footer clearfix no-padding">
                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-green" data-toggle="tooltip" data-placement="top" title="More Options"><i class="fa fa-cog"></i></a>
                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-blue" data-toggle="tooltip" data-placement="top" title="Add Content"><i class="fa fa-plus"></i></a>
                        <a href="#" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <!-- end: PAGE CONTENT-->
    </div>
    <div class="subviews">
        <div class="subviews-container"></div>
    </div>
</div>
@endsection