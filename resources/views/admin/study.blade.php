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
                            Study Abroad
                        </li>
                    </ol>
                </div>
            </div>
            <!-- end: BREADCRUMB -->
            <!-- start: PAGE CONTENT -->
            <div class="row">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="col-sm-12" style="padding-left:20px ; padding-right:20px;padding-bottom: 25px" >
                        <h2 style="text-align: center;font-weight: bold">{{$detail->titlefirst}}</h2>

                        <textarea name="usa" rows=16 id="template_contents_usa" class="form-control tinymce">{!! $usa !!}</textarea>


                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12" style="padding-left:20px ; padding-right:20px ;padding-bottom: 25px">
                        <h2 style="text-align: center;font-weight: bold">{{$detail->titlesecond}}</h2>

                        <textarea name="aus" rows=16 id="template_contents_aus" class="form-control tinymce">{!! $aus !!}</textarea>


                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12" style="padding-left:20px ; padding-right:20px;padding-bottom: 25px">

                        <h2 style="text-align: center;font-weight: bold">{{$detail->titlethird}}</h2>
                        <textarea name="nwz" rows=16 id="template_contents_nwz" class="form-control tinymce">{!! $nwz !!}</textarea>


                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12" style="padding-left:20px ; padding-right:20px;padding-bottom: 25px" >

                        <h2 style="text-align: center;font-weight: bold">{{$detail->titlefourth}}</h2>
                        <textarea name="eur" rows=16 id="template_contents_eur" class="form-control tinymce">{!! $eur !!}</textarea>


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

@section('javascript')
    <script src="../assets/plugins/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            tinymce.init({
                forced_root_block : "",
                selector:'textarea.tinymce',
                height:250,
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
        });

        function saveContent() {

            var usa = tinyMCE.get('template_contents_usa').getContent();
            var aus = tinyMCE.get('template_contents_aus').getContent();
            var nwz = tinyMCE.get('template_contents_nwz').getContent();
            var eur = tinyMCE.get('template_contents_eur').getContent();
            var token = $("#token").val();
            $.ajax({
                url:"/admin/study",
                data:{'_token': token,'usa':usa,'aus':aus,'nwz':nwz,'eur':eur,'save':'1'},
                method:'post',
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