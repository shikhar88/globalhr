<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Global HR</title>
    <link rel="stylesheet" href="assets/css/contact.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <title>Parshuram sharma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            height: 350px;
            /*height: 30%;*/
            width: 80%;
            margin: auto;
        }

        .newspaper {
            -webkit-columns: 100px 2; /* Chrome, Safari, Opera */
            -moz-columns: 100px 2; /* Firefox */
            columns: 100px 2;
        }
        .container_my {
            position: relative;
            width: 100%;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 40%;
            left: 45%;
            text-align: center;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            font-size: smaller;
        }

        .container_my:hover .image {
            opacity: 0.2;
        }

        .container_my:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: #4CAF50;
            color: white;
            font-size: 10px;
            padding: 16px 32px;
            text-align: center;
        }

        /*div.img {*/
        /*border: 1px solid #ccc;*/
        /*}*/

        /*div.img:hover {*/
        /*border: 1px solid #777;*/
        /*}*/

        div.img img {
            width: 10%;
            height: auto;
        }

        div.desc {
            padding: 05px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 29%;

        }

        @media only screen and (max-width: 700px){
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px){
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>

    <link rel="stylesheet" href="assets/css/footer-distributed-with-address-and-phones.css">

</head>
<body>
@include('nav');
<!-- Navigation -->
<div class="bodycontent">
<div id="myCarousel" class="carousel slide" data-ride="carousel" id="home">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($banner as $key=>$value)
            <li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$value->class}}"></li>
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
            @foreach($banner as $key=>$value)
                <div class="item {{$value->class}}">
                    <img src="{{$value->path}}"/>
                </div>
            @endforeach

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Page Content -->
<div class="container" style="width:100%">

    <!-- Marketing Icons Section -->
    <div class="row" style="margin:1% 0 3% 0">

        <div class="col-lg-12" style="text-align:center" id="aboutus">
            <h1 class="page-header1" style="margin-top: 3%">
                Welcome to our company
            </h1>
            <div class="head_line"></div>
        </div>
        <!--<div class="well">-->
        <div class="row">

            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <p style="text-align: center">Study In USA United States of America commonly known as USA is a
                            country having migrants to try their luck from more than 150 countries! Study In Australia
                            Australia has the third highest number of international students in the world behind only
                            the United Kingdom. Study In New Zealand Every new day in the world</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <!--</div>-->


        <div class="col-lg-1">
        </div>
        <div class="col-lg-10 divPadding">
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4></i> About Us</h4>
                        </div>
                        <div class="panel-body">
                            <p><strong>Welcome To Global Education & Human Resources P.Ltd.</strong></p>
                            <p style="text-align: justify">Global Education & Human Resources P.Ltd. is a renowned
                                education consultancy established in 2004 with a major aim to provide an outstanding
                                counseling and recruitment services to our Nepalese students for abroad studies. Global
                                is a private establishment registered with the Office of the Company Registrar, Ministry
                                of Industry, Commerce and Supply, Government of Nepal. The main office of the
                                organization is located in the heart of capital city at Putalisadak, (Shankerdev Campus
                                Road) Kathmandu, Nepal. Global Education is a service oriented organization that
                                consistently explores better educational and career opportunities for deserving
                                students. We are a team of professionals dedicated in to enhance educational growth and
                                integrity.</p>
                            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">Learn
                                More</a>
                        </div>
                    </div>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="vertical-alignment-helper">
                            <div class="modal-dialog vertical-align-center">

                                Modal content
                                <div class="modal-content" style="text-align: justify; width: 60%; padding: 2%;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">About Us</h4>
                                    </div>

                                    <p class="modal-body"></p>
                                    {!! $aboutus !!}
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="container_my">
                                        <div class="img">
                                            <a onclick="study('study/usa')" style="cursor: pointer;">
                                            <img src="assets/images/Usa.png" alt="Avatar" class="image" style="width:100%">
                                            <div class="middle">
                                                <div style="padding: 1%"> United States of America commonly known as USA is a country having migrants to try their luck from more than 150 countries!</div>
                                            </div>
                                            <div class="desc" style="padding-left: 14%;text-align: left">Study In United State
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div style="margin-top: 15%"></div>
                                    <div class="container_my">
                                        <div class="img">
                                            <a onclick="study('study/australia')" style="cursor: pointer;">
                                            <img src="assets/images/Australia.png" alt="Avatar" class="image" style="width:100%">
                                            <div class="middle">
                                                <div style="padding: 1%"> Australia has the third highest number of international students in the world behind only the United Kingdom.</div>
                                            </div>
                                            <div class="desc" style="padding-left: 14%;text-align: left">Study In Australia
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="container_my">
                                        <div class="img">
                                            <a onclick="study('study/newzealand')" style="cursor: pointer;">
                                            <img src="assets/images/new_zealand.png" alt="Avatar" class="image" style="width:100%">
                                            <div class="middle">
                                                <div style="padding: 1%">  Every new day in the world starts in New Zealand. Nepali students choose NZ as their preferred destination to study.</div>
                                            </div>
                                            <div class="desc" style="padding-left: 14%;text-align: left">Study In New Zealand
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div style="margin-top: 15%"></div>
                                    <div class="container_my">
                                        <div class="img">
                                            <a onclick="study('study/europe')" style="cursor: pointer;">
                                            <img src="assets/images/no_image.jpg" alt="Avatar" class="image" style="width:100%">
                                            <div class="middle">
                                                <div style="padding: 1%"> No text</div>
                                            </div>
                                            <div class="desc" style="padding-left: 14%;text-align: left">Study In Europe
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-1"></div>
</div>
<!-- /.row -->

<!-- Portfolio Section -->
    <div class="row" style="background-color:#F7F6F0 ">
        <div class="col-lg-12" style="color:#666; text-align:center">
            <h2 class="page-header1" style="color: #666">Our Certification<div class="head_line"></div></h2>

        </div>

        <div class="col-lg-1"></div>
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:200px;overflow:hidden;visibility:hidden;">

            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
                @foreach($certification as $crt)
                    <div>
                        <img data-u="image" src="{{$crt->path}}" />
                    </div>
                    <div style="margin:1px"></div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-1"></div>

    </div>
<!-- /.row -->

<!-- Features Section -->
    <div class="row">
        <div class="col-lg-12 divPadding" style="text-align:center" id="company_feature">
            <h2 class="page-header1">Our Services</h2>
            <div class="head_line"></div>
        </div>
        <div class="col-md-4 col-lg-offset-1">

            <div class="panel panel-default">
                <div class="panel-body">
                    <p style="text-align: center;"><strong>How WE Can Help?</strong></p>
                    <!--<div class="newspaper">-->
                    <li><a href="#"  data-toggle="modal" data-target="#pointModal">Guaranteed scholarships for deserving students</a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#pointModal">Guaranteed scholarships for deserving students</a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#pointModal">Guaranteed scholarships for deserving students</a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#pointModal">Guaranteed scholarships for deserving students</a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#pointModal">Guaranteed scholarships for deserving students</a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#pointModal">Guaranteed scholarships for deserving students</a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#pointModal">Guaranteed scholarships for deserving students</a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#pointModal">Guaranteed scholarships for deserving students</a></li>
                </div>

                <!--</div>-->
            </div>
            <div class="modal fade" id="pointModal" role="dialog">
                <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center">
                        <div class="modal-content" style="text-align: justify;">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Guaranteed scholarships for deserving students</h4>
                            </div>

                            <p class="modal-body"></p>
                            <p style="text-align: justify; padding:0% 3%">Guaranteed scholarships for deserving students</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div id="jssor_2" class="col-md-8" style="position:relative;margin:0 auto;top:0px;left:0px;width:810px;height:300px;overflow:hidden;visibility:hidden;background-color:rgba(182,182,182,0.32);">
            <!-- Loading Screen -->
            <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(123,232,223,0.7);">
                <!--        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>-->
                <!--<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>-->
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">
                <div>
                    <!--<img data-u="image" src="img/3.jpg" />-->
                    <p style="margin: 30% 10%; text-align: justify; color: #444;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus hendrerit dictum fringilla. Sed sollicitudin vitae urna sit amet fermentum. Curabitur sit amet efficitur est. Etiam egestas ipsum rutrum mi scelerisque dapibus. Morbi feugiat nunc non ultrices commodo. Vestibulum aliquam risus erat, vitae varius libero scelerisque sit amet. Etiam suscipit est at risus tincidunt lobortis. Aliquam velit nibh, bibendum sit amet risus sed, congue molestie leo. Nam sollicitudin ultricies eleifend. </p>
                    <div data-u="thumb">
                        <img class="i" src="assets/images/Usa.png" />
                        <div class="t">Person Name0</div>
                        <div class="c">Personal position</div>
                    </div>
                </div>
                <div>
                    <img data-u="image" src="assets/images/1.jpg" />
                    <div data-u="thumb">
                        <img class="i" src="assets/images/slide3.jpg" />
                        <div class="t">Person Name1</div>
                        <div class="c">Personal position</div>
                    </div>
                </div>
                <div>
                    <img data-u="image" src="assets/images/3.jpg" />
                    <div data-u="thumb">
                        <img class="i" src="assets/images/slide3.jpg" />
                        <div class="t">Person Name2</div>
                        <div class="c">Personal position</div>
                    </div>
                </div>
                <div>
                    <img data-u="image" src="assets/images/1.jpg" />
                    <div data-u="thumb">
                        <img class="i" src="assets/images/Usa.png" />
                        <div class="t">Person Name3</div>
                        <div class="c">Personal position</div>
                    </div>
                </div>
                <div>
                    <img data-u="image" src="assets/images/3.jpg" />
                    <div data-u="thumb">
                        <img class="i" src="assets/images/slide3.jpg" />
                        <div class="t">Person Name4</div>
                        <div class="c">Personal position</div>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Navigator -->
            <div data-u="thumbnavigator" class="jssort11" style="position:absolute;right:5px;top:0px;font-family:Arial, Helvetica, sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;width:200px;height:300px;" data-autocenter="2">
                <!-- Thumbnail Item Skin Begin -->
                <div data-u="slides" style="cursor: default;">
                    <div data-u="prototype" class="p">
                        <div data-u="thumbnailtemplate" class="tp"></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!-- Arrow Navigator -->
            <!--<span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>-->
            <!--<span data-u="arrowright" class="jssora02r" style="top:0px;right:218px;width:55px;height:55px;" data-autocenter="2"></span>-->
        </div>

    </div>

<hr>
<div id='browser'>
    <div id='content'>
        <div id='left'>
            <div id='map'>

                <!--<p>Where To Find Us</p>-->
                <!--<div class='map-locator'>-->
                <!--<div class='tooltip'>-->
                <!--<ul>-->
                <!--<li>-->
                <!--<span class='entypo-location'></span>-->
                <!--<span class='selectedLocation'>Nepal</span>-->
                <!--</li>-->
                <!--<li>-->
                <!--<span class='entypo-mail'></span>-->
            <!--<a href='#'>sharma.parshuram1990@gmail.com</a>-->
                <!--</li>-->
                <!--<li>-->
                <!--<span class='entypo-phone'></span>-->
                <!--+977-9841095697-->
                <!--</li>-->
                <!--</ul>-->
                <!--</div>-->
                <!--</div>-->
                <div class='zoom'></div>
            </div>

        </div>
        <div id='right'>
            <p>Connect</p>
            <div id='social'>

            </div>
            <form id="mailform">
                <p>Get in Contact</p>
                {{--<input placeholder='Email' type='email'>--}}
                <input placeholder='Subject' type='text' name="subject" id="mailSubject">
                <textarea placeholder='Message' rows='4' name="message" id="mailMessage"></textarea>
                <input placeholder='Send' type='submit' style="display: none;">
                <a style="cursor: pointer;" class="btn btn-default" onclick="sendMail();">Submit</a>
            </form>
            <p>other way</p>
            <p class='other entypo-mail'>
                <a href='#'>sharma.parshuram1990@gmail.com</a>
            </p>
            <p class='other entypo-phone'>+977-9841095697</p>
        </div>
    </div>
</div>
</div>
@include('footer')
<script src="assets/js/jquery.js"></script>
<script src="assets/plugins/bootbox/bootbox.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Script to Activate the Carousel -->
<script type="text/javascript">
    $(document).ready(function () {
        scrollUpHome();
        var myDiv = $('#your-div-id');
        myDiv.text(myDiv.text().substring(0,300) + '<a href="#">Read more</a>')
    });
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    function scrollDownAboutUs() {
        $('html,body').animate({
                scrollTop: $(this.aboutus).offset().top
            },
            'slow');
    }

    function scrollDownCompanuFeature() {
        $('html,body').animate({
                scrollTop: $(this.company_feature).offset().top
            },
            'slow');
    }
    function scrollDownContact() {
        $('html,body').animate({
                scrollTop: $(this.browser).offset().top
            },
            'slow');
    }
    function scrollUpHome() {
        $('html,body').animate({
                scrollTop: 0
            },
            'slow');
    }
</script>


<!-- Script to Activate the Carousel -->
<script>
    function myMap() {
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
            center: new google.maps.LatLng(27.674755, 85.360338),
            zoom: 10
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);
    }
</script>
<script type="text/javascript">
    function study(url) {
        $.ajax({
            url:url,
            method:'get',
            success:function (result) {
                $('.bodycontent').html('');
                $('.bodycontent').append(result);
                $("#homemenu").attr('onclick',"loadHome('1');");
                $("#aboutmenu").attr('onclick',"loadHome('2');");
                $("#servicesmenu").attr('onclick',"loadHome('3');");
                $("#contactmenu").attr('onclick',"loadHome('4');");
                $('html,body').animate({
                    scrollTop: 0
                });
            },
            error:function (result) {

            }
        });
    }

    function loadHome(menu) {
        $.ajax({
            url:'/index',
            method:'get',
            success:function (result) {
                $('.bodycontent').html('');
                $('.bodycontent').append(result);
                $('.carousel').carousel({
                    interval: 2000 //changes the speed
                });
                myMap();
                if(menu == '1'){
                    $("#homemenu").attr('onclick',"scrollUpHome();");
                    scrollUpHome();
                }
                else if(menu == '2'){
                    $("#aboutmenu").attr('onclick',"scrollDownAboutUs();");
                    scrollDownAboutUs();
                }
                else if(menu == '3'){
                    $("#servicesmenu").attr('onclick',"scrollDownCompanuFeature();");
                    scrollDownCompanuFeature();
                }
                else if(menu == '4'){
                    $("#contactmenu").attr('onclick',"scrollDownContact();");
                    scrollDownContact();
                }
            },
            error:function (result) {
                console.log(result);
            }
        });
    }
    function sendMail() {
        if ($.trim($("#mailSubject").val()) == "")
            $("#mailSubject").css("border","1px solid red");
        else
            $("#mailSubject").css("border","none");
        if ($.trim($("#mailMessage").val()) == "")
            $("#mailMessage").css("border","1px solid red");
        else
            $("#mailMessage").css("border","none");
        if ($.trim($("#mailSubject").val()) == "" || $.trim($("#mailMessage").val()) == "")
            return false;

        var data = $("#mailform").serialize();
        $.ajax({
            url:'/mail',
            method:'get',
            data:data,
            success:function () {
                bootbox.alert('Your message was successfully sent');
            },
            error:function () {
                bootbox.alert('Error sending message try again');
            }
        });
    }
</script>
<script src="assets/js/jssor.slider-22.2.6.mini.js" type="text/javascript"></script>
<script src="assets/js/jssor.slider-22.2.6.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {

        var jssor_1_options = {
            $AutoPlay: true,
            $Idle: 0,
            $AutoPlaySteps: 4,
            $SlideDuration: 2500,
            $SlideEasing: $Jease$.$Linear,
            $PauseOnHover: 4,
            $SlideWidth: 140,
            $Cols: 7
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*responsive code begin*/
        /*you can remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 809);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        jssor_1_slider_init();
        /*responsive code end*/
    });
</script>
<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_options = {
            $AutoPlay: true,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 4,
                $SpacingX: 4,
                $SpacingY: 4,
                $Orientation: 2,
                $Align: 0
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_2", jssor_1_options);

        /*responsive code begin*/
        /*you can remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 810);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*responsive code end*/
    };
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZL5YdXuEIRgO6G4eUH1rBHOfYhy0rmMk&callback=myMap"></script>
</body>
</html>