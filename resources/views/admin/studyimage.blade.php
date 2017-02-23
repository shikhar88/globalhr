@extends('admin.template')
@section('content')
    <div class="main-content">
        <div class="container">
            <!-- start: PAGE HEADER -->
            <!-- start: TOOLBAR -->
            <div class="toolbar row">
                <div class="col-sm-6 hidden-xs">
                    <div class="page-header">
                        <h1>Study <small>Abroad </small></h1>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="toolbar-tools pull-right">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right">
                            <!-- start: TO-DO DROPDOWN -->
                            <li class="menu-search">
                                <a href="" onclick="saveimage();">
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
                            Study abroad
                        </li>
                    </ol>
                </div>
            </div>
            <!-- end: BREADCRUMB -->
            <!-- start: PAGE CONTENT -->
            <div class="row">
                <form method="post" action="/admin/studyimage" id="studyimage" enctype="multipart/form-data">
                 <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <div class="col-sm-12" style="text-align: center">
                            <label>
                                <b style="font-size: 20px">{{$detail->titlefirst}}</b>
                            </label>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Title
                                </label>
                                <div class="col-sm-10">
													
														<input type="text" placeholder="Title"  class="form-control" name="titlefirst" value="{{$detail->titlefirst}}">
														
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Short Description
                                </label>
                                <div class="col-sm-10">
                                    <textarea maxlength="130" class="autosize form-control limited" id="form-field-24" name="descfirst">{{$detail->descfirst}}</textarea>
                                </div>
                            </div>

                            <div class="fileupload fileupload-new" data-provides="fileupload" style="text-align: center">
                                <div class="fileupload-new thumbnail" ><img
                                            src="{{$usaimage}}" alt=""/>
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-light-grey btn-file">
                                                                <span
                                                                        class="fileupload-new"><i
                                                                            class="fa fa-picture-o"></i> Select image</span>
                                                                <span
                                                                        class="fileupload-exists"><i
                                                                            class="fa fa-picture-o"></i> Change</span>
																<input type="file" name="usaimage" id="testssadf">
															</span>
                                    <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                        <i class="fa fa-times"></i> Remove
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12" style="text-align: center">
                            <label>
                                <b style="font-size: 20px">{{$detail->titlesecond}}</b>
                            </label>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Title
                                </label>
                                <div class="col-sm-10">
													
														<input type="text" placeholder="Title"  class="form-control" name="titlesecond" value="{{$detail->titlesecond}}">
														
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Short Description
                                </label>
                                <div class="col-sm-10">
                                    <textarea maxlength="130" class="autosize form-control limited" id="form-field-24" name="descsecond">{{$detail->descsecond}}</textarea>
                                </div>
                            </div>
                            <div class="fileupload fileupload-new" data-provides="fileupload" style="text-align: center">
                                <div class="fileupload-new thumbnail" ><img
                                            src="{{$australiaimage}}" alt=""/>
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-light-grey btn-file">
                                                                <span
                                                                        class="fileupload-new"><i
                                                                            class="fa fa-picture-o"></i> Select image</span>
                                                                <span
                                                                        class="fileupload-exists"><i
                                                                            class="fa fa-picture-o"></i> Change</span>
																<input type="file" name="australiaimage" id="testssadf">
															</span>
                                    <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                        <i class="fa fa-times"></i> Remove
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12" style="text-align: center">
                            <label>
                                <b style="font-size: 20px">{{$detail->titlethird}}</b>
                            </label>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Title
                                </label>
                                <div class="col-sm-10">
													
														<input type="text" placeholder="Title"  class="form-control" name="titlethird" value="{{$detail->titlethird}}">
														
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Short Description
                                </label>
                                <div class="col-sm-10">
                                    <textarea maxlength="130" class="autosize form-control limited" id="form-field-24" name="descthird">{{$detail->descthird}}</textarea>
                                </div>
                            </div>
                            <div class="fileupload fileupload-new" data-provides="fileupload" style="text-align: center">
                                <div class="fileupload-new thumbnail" ><img
                                            src="{{$newzelandimage}}" alt=""/>
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-light-grey btn-file">
                                                                <span
                                                                        class="fileupload-new"><i
                                                                            class="fa fa-picture-o"></i> Select image</span>
                                                                <span
                                                                        class="fileupload-exists"><i
                                                                            class="fa fa-picture-o"></i> Change</span>
																<input type="file" name="newzelandimage" id="testssadf">
															</span>
                                    <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                        <i class="fa fa-times"></i> Remove
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12" style="text-align: center">
                            <label>
                                <b style="font-size: 20px">{{$detail->titlefourth}}</b>
                            </label>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Title
                                </label>
                                <div class="col-sm-10">
													
														<input type="text" placeholder="Title"  class="form-control" name="titlefourth" value="{{$detail->titlefourth}}">
														
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Short Description
                                </label>
                                <div class="col-sm-10">
                                    <textarea maxlength="130" class="autosize form-control limited" id="form-field-24" name="descfourth">{{$detail->descfourth}}</textarea>
                                </div>
                            </div>
                            <div class="fileupload fileupload-new" data-provides="fileupload" style="text-align: center">
                                <div class="fileupload-new thumbnail" ><img
                                            src="{{$europeimage}}" alt=""/>
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div>
                                    
                                    <span class="btn btn-light-grey btn-file">
                                                                <span
                                                                        class="fileupload-new"><i
                                                                            class="fa fa-picture-o"></i> Select image</span>
                                                                <span
                                                                        class="fileupload-exists"><i
                                                                            class="fa fa-picture-o"></i> Change</span>
																<input type="file" name="europeimage" id="testssadf">
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
    function saveimage() {
        $("#studyimage").submit();
    }
</script>
@endsection