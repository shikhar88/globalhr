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
                            <a href="#responsive" data-toggle="modal" class="demo btn btn-blue">
                                Add new
                            </a><br><br>
                            <div class="col-sm-4"><b>Title</b></div>
                            <div class="col-sm-8"><b>Action</b></div>
                            @foreach($help as $hlp)
                                <div id="helpdiv{{$hlp->id}}">
                                    <div class="col-sm-4">{{$hlp->title}}</div>
                                    <div class="col-sm-8"><a href="#responsive" data-toggle="modal" onclick="feedcontent('{{$hlp->id}}')"><i class="fa fa-edit"></i></a> &nbsp;&nbsp;<i class="fa fa-trash-o" style="cursor: pointer;" onclick="deletehelp('{{$hlp->id}}');"></i></div>
                                </div>
                            @endforeach
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
        <div id="responsive" class="modal extended-modal fade no-display" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title">Add new</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" action="/admin/help" id="helpform">
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="helpid" id="helpid" value="">
                                    <p>
                                        <input class="form-control titlecontent" type="text" placeholder="Name" name="title">
                                    </p>
                                    <p>
                                    <textarea class="autosize form-control desccontent" id="form-field-24" name="desc" placeholder="Description" style="min-height: 250px;"></textarea>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-light-grey">
                            Close
                        </button>
                        <button type="button" class="btn btn-blue addbutton" onclick="submithelpform();">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript">
        function submithelpform() {
            $("#helpform").submit();
        }

        function feedcontent(id) {
            $.ajax({
                url:'/admin/help',
                data:{'id':id,'action':'1'},
                method:'get',
                dataType:'json',
                success:function (result) {
                    $(".modal-body .titlecontent").val(result.title);
                    $(".modal-body .desccontent").val(result.desc);
                    $(".addbutton").html("Update");
                    $("#helpid").val(id);
                },
                error:function () {

                }
            });
        }

        function deletehelp(id) {
            bootbox.confirm("Are you sure you want to delete this ?",function (res) {
                if(res)
                    $.ajax({
                        url: '/admin/help',
                        data: {'id': id, 'action': '2'},
                        method: 'get',
                        success: function () {
                            $("#helpdiv" + id).css('display', 'none');
                            showToast('success', 'Content has been deleted');
                        },
                        error: function () {
                            showToast('error', 'Error while deleting content. Try again.');
                        }
                    });
            });
        }
    </script>
@endsection