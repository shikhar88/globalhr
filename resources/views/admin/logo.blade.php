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
                                <a href="" onclick="saveBanner();">
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
                <h2 style="text-align: center;font-weight: bold">Logo</h2>
                <form class="form-horizontal" enctype="multipart/form-data" id="logoimageform" method="post"
                      action="/admin/logo">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>
                                Logo Upload
                            </label>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="height: 50px"><img
                                            src="{{$logo}}" alt=""/>
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div>
                                    <span class="fileupload-exists btn btn-light-grey btn-file" onclick="saveLogo();"><i
                                                class="fa fa-picture-o"></i> Add Logo</span></span>
                                    <span class="btn btn-light-grey btn-file">
                                                                <span
                                                                        class="fileupload-new"><i
                                                                            class="fa fa-picture-o"></i> Select image</span>
                                                                <span
                                                                        class="fileupload-exists"><i
                                                                            class="fa fa-picture-o"></i> Change</span>
																<input type="file" name="logo" id="testssadf">
															</span>
                                    <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                        <i class="fa fa-times"></i> Remove
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


                <h2 style="text-align: center;font-weight: bold">certification</h2>
                <ul id="Grid" class="list-unstyled">
                    @foreach($certification as $crt)
                        <li class="col-md-4 col-sm-6 col-xs-12 category_1 gallery-img" data-cat="1" id="certification{{$crt->id}}"}>
                            <div class="portfolio-item">
                                <a class="thumb-info" href="{{$crt->path}}" data-lightbox="gallery"
                                   data-title="Website">
                                    <img src="{{$crt->path}}" class="img-responsive" alt="">
                                    <span class="thumb-info-title"> Website </span>
                                </a>
                                <div class="tools tools-bottom">
                                    <a style="cursor: pointer;">
                                        <i class="fa fa-link"></i>
                                    </a>

                                    @if($crt->active == '1')
                                        <a style="cursor: pointer;" onclick="changeStatus('{{$crt->id}}',this);" data-active="0">
                                            <i class="fa fa-eye" id="certificationstatus{{$crt->id}}"></i>
                                        </a>
                                    @else
                                        <a style="cursor: pointer;" onclick="changeStatus('{{$crt->id}}',this);" data-active="1">
                                            <i class="fa fa-eye-slash" id="certificationstatus{{$crt->id}}"></i>
                                        </a>
                                    @endif
                                    <a style="cursor: pointer;" onclick="removecertification('{{$crt->id}}');">
                                        <i class="fa fa-trash-o" ></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                @endforeach
                <!-- "gap" elements fill in the gaps in justified grid -->
                </ul>
                <form class="form-horizontal" enctype="multipart/form-data" id="certificationimageform" method="post"
                      action="/admin/logo">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>
                                Image Upload
                            </label>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail"><img
                                            src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div>
                                    <span class="fileupload-exists btn btn-light-grey btn-file" onclick="savecertification();"><i
                                                class="fa fa-picture-o"></i> Add certification</span></span>
                                    <span class="btn btn-light-grey btn-file">
                                                                <span
                                                                        class="fileupload-new"><i
                                                                            class="fa fa-picture-o"></i> Select image</span>
                                                                <span
                                                                        class="fileupload-exists"><i
                                                                            class="fa fa-picture-o"></i> Change</span>
																<input type="file" name="certification">
															</span>
                                    <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                        <i class="fa fa-times"></i> Remove
                                    </a>
                                </div>
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
    <script type="text/javascript">
        function saveLogo() {
            $("#logoimageform").submit();
        }

        function savecertification() {
            $("#certificationimageform").submit();
        }

        function removecertification(cid) {
            bootbox.confirm("Are you sure you want to delete this image",function (res) {
                if(res)
                    $.ajax({
                        url: '/admin/logo',
                        data: {'id': cid, 'action': 'delete', 'crud': '1'},
                        method: 'get',
                        success: function () {
                            $("#certification" + cid).css('display','none');
                            showToast('success', 'Image has been successfully deleted');
                        },
                        error: function () {
                            showToast('error', 'Error deleting image.Try again');
                        }
                    });
            });
        }

        function changeStatus(cid,current) {
            var active = $(current).data('active');
            $.ajax({
                url: '/admin/logo',
                data: {'id': cid, 'action': 'update', 'crud': '1','active':active},
                method: 'get',
                success: function () {
                    if(active == '1'){
                        $("#certificationstatus"+cid).removeClass('fa-eye-slash');
                        $("#certificationstatus"+cid).addClass('fa-eye');
                        $(current).data('active','0');
                    }
                    else if(active == '0'){
                        $("#certificationstatus"+cid).removeClass('fa-eye');
                        $("#certificationstatus"+cid).addClass('fa-eye-slash');
                        $(current).data('active','1');
                    }
                    showToast('success', 'Action has been successfully completed');
                },
                error: function () {
                    showToast('error', 'Error performing action. Try again.');
                }
            });
        }
    </script>
@endsection