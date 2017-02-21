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

                <div class="col-sm-12">
                    <!-- start: ACCORDION PANEL -->
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Accordions</h4>
                            <div class="panel-tools">
                                <a href="#responsive" data-toggle="modal" class="demo btn btn-blue" onclick="tinymcestart()">
                                    View Demo
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="panel-group accordion" id="accordion">
                                <div class="panel panel-white">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                <i class="icon-arrow"></i> Collapsible Group Item #1
                                            </a></h5>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-white">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                <i class="icon-arrow"></i> Collapsible Group Item #2
                                            </a></h5>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-white">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                <i class="icon-arrow"></i> Collapsible Group Item #3
                                            </a></h5>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <textarea name="content" rows=16 id="template_contents" class="form-control tinymce">ASD</textarea>
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
    </script>
@endsection