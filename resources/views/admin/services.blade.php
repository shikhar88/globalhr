@extends('admin.template')
@section('content')
    <div class="main-content">
        <div class="container">
            <!-- start: PAGE HEADER -->
            <!-- start: TOOLBAR -->
            <div class="toolbar row">
                <div class="col-sm-6 hidden-xs">
                    <div class="page-header">
                        <h1>Service <small>Setting </small></h1>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="toolbar-tools pull-right">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right">
                            <!-- start: TO-DO DROPDOWN -->
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
                                Admin
                            </a>
                        </li>
                        <li class="active">
                            Service Setting
                        </li>
                    </ol>
                </div>
            </div>
            <!-- end: BREADCRUMB -->
            <!-- start: PAGE CONTENT -->
            <div class="row">

                <div class="col-sm-12">
                    <!-- start: ACCORDION PANEL -->
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a href="#responsive" data-toggle="modal" class="demo btn btn-blue" onclick="tinymcestartnew()">
                                    Add
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                        @foreach($serviceslide as $key=>$service)
                                <div class="panel-group accordion" id="accordion{{$service->id}}">
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key}}">
                                                    <i class="icon-arrow"></i> {{$service->name}}
                                                </a></h5>
                                        </div>
                                        <div id="collapse{{$key}}" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-2 ">
                                                        Name
                                                    </label>
                                                    <div class="col-sm-10">
													    {{$service->name}}
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="form-group">
                                                    <label class="col-sm-2">
                                                        Position
                                                    </label>
                                                    <div class="col-sm-10">
                                                        {{$service->position}}
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label class="col-sm-2 ">
                                                        Thumbnail
                                                    </label>
                                                    <div class="col-sm-10">
                                                        <img class="i" src={{$service->thumbnail}} />
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label class="col-sm-2 ">
                                                        Content
                                                    </label>
                                                    <div class="col-sm-10">
                                                        {!! $service->content !!}
                                                    </div>
                                                </div>
                                                <a href="#responsivenew" data-toggle="modal" class="demo btn btn-blue" onclick="feeddata({{$service->id}});tinymcestart();">
                                                    Edit
                                                </a>
                                                <a href="#" class="demo btn btn-blue" onclick="deleteservice({{$service->id}});">
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        </div>
                    </div>
                    <!-- end: ACCORDION PANEL -->
                </div>

            </div>

            <!-- end: PAGE CONTENT-->
        </div>
        <div class="subviews">
            <div class="subviews-container"></div>
        </div>
    </div>
    <div id="responsive" class="modal extended-modal fade no-display" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">Add new detail</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="/admin/services" enctype="multipart/form-data" id="serviceform">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <p>
                                <input class="form-control" type="text" placeholder="Name" name="name">
                            </p>
                            <p>
                                <input class="form-control" type="text" placeholder="position" name="position">
                            </p>

                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" ><img
                                            src="" alt=""/>
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
																<input type="file" name="thumbnailimage" id="testssadf">
															</span>
                                    <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                        <i class="fa fa-times"></i> Remove
                                    </a>
                                </div>
                            </div>
                            <textarea name="content" rows=16 id="template_contents" class="form-control tinymce"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-light-grey">
                        Close
                    </button>
                    <button type="button" class="btn btn-blue" onclick="submitform();">
                        Add
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="responsivenew" class="modal extended-modal fade no-display" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">Add new detail</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="/admin/services" enctype="multipart/form-data" id="serviceformedit">
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                <input type="hidden" name="serviceid"  id="serviceidedit" value="">
                                <input type="hidden" name="serviceimage" id="serviceimage"  value="">
                                <p>
                                    <input class="form-control" type="text" placeholder="Name" name="name" id="servicename">
                                </p>
                                <p>
                                    <input class="form-control" type="text" placeholder="position" name="position" id="servicepos">
                                </p>

                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" ><img id="serviceimg"
                                                src="" alt=""/>
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
																<input type="file" name="thumbnailimage" id="testssadf">
															</span>
                                        <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                            <i class="fa fa-times"></i> Remove
                                        </a>
                                    </div>
                                </div>
                                <textarea name="content" rows=16 id="template_contents_new" class="servicecontent form-control tinymce"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-light-grey">
                        Close
                    </button>

                    <button type="button" class="btn btn-blue" onclick="submitformnew();">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="../assets/plugins/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
//            tinymce.init({
//                selector:'textarea.tinymce',
//                height:250,
//                plugins: [
//                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
//                    'searchreplace wordcount visualblocks visualchars code fullscreen',
//                    'insertdatetime media nonbreaking save table contextmenu directionality',
//                    'emoticons template paste textcolor colorpicker textpattern imagetools filemanager'
//                ],
//                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link',
//                toolbar2: 'print preview media | forecolor backcolor emoticons | mybutton | filemanager',
//                image_advtab: true,
//                cleanup_on_startup: false,
//                trim_span_elements: false,
//                verify_html: false,
//                cleanup: false,
//                convert_urls: false
//            });
        });
       function tinymcestart() {
           tinymce.init({
               selector:'textarea.tinymce',
               height:100,
               plugins: [
                   'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                   'searchreplace wordcount visualblocks visualchars code fullscreen',
                   'insertdatetime media nonbreaking save table contextmenu directionality',
                   'emoticons template paste textcolor colorpicker textpattern imagetools filemanager'
               ],
               toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link',
               toolbar2: 'print preview media | forecolor backcolor emoticons | mybutton | filemanager',
               image_advtab: true,
               cleanup_on_startup: false,
               trim_span_elements: false,
               verify_html: false,
               cleanup: false,
               convert_urls: false
           });
       }

       function submitform() {
           $("#serviceform").submit();
       }

        function submitformnew() {
            $("#serviceformedit").submit();
        }

        function deleteservice(id) {
            bootbox.confirm("Are you sure you want to delete this ?",function (res) {
                if (res)
                    $.ajax({
                        url: '/admin/services',
                        data: {'id': id, 'action': '2'},
                        method: 'get',
                        success: function (result) {
                            $("#accordion" + id).css('display', 'none');
                            showToast('success', 'Content has been deleted');
                        },
                        error: function () {
                            showToast('error', 'Error while deleting content. Try again.');
                        }
                    });
            });
        }

       function feeddata(key) {
           $.ajax({
              url:'/admin/services',
               data:{'id':key,'action':'1'},
               method:'get',
               dataType:'json',
               success:function (result) {
                   tinymce.remove();
                   tinymcestart();
                   $(".modal-body #servicename").val(result.name);
                   $("#serviceidedit").val(key);
                   $("#serviceimage").val(result.thumbnail);
                   $(".modal-body #servicepos").val(result.position);
                   $(".modal-body #serviceimg").attr('src',result.thumbnail);
//                   tinyMCE.get('.servicecontent').setContent(result.content);
//                   $(".servicecontent").html(result.content);
                   tinymce.get('template_contents_new').setContent(result.content);

               },
               error:function () {

               }
           });
           {{--console.log({{$serviceslide[]->name}});--}}
           {{--$(".modal-body #servicename").val({{$serviceslide[key]->name}});--}}
           {{--$(".modal-body #servicepos").val({{$serviceslide[key]->position}});--}}
           {{--$(".modal-body #serviceimg").attr('img',"{{$serviceslide[key]->thumbnail}}");--}}
           {{--$(".modal-body .servicecontent").val({{$serviceslide[key]->content}});--}}
       }

        function tinymcestartnew() {
            tinymce.remove();
            tinymcestart();
        }
        $('#responsive').on('hidden.bs.modal', function () {
            location.reload();
        });
    </script>
@endsection