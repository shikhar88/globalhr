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
                                                <img src="{{$usaimage}}" alt="Avatar" class="image" style="width:100%">
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
                                                <img src="{{$australiaimage}}" alt="Avatar" class="image" style="width:100%">
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
                                                <img src="{{$newzelandimage}}" alt="Avatar" class="image" style="width:100%">
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
                                                <img src="{{$europeimage}}" alt="Avatar" class="image" style="width:100%">
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


    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:200px;overflow:hidden;visibility:hidden;align:center">

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
    <div class="col-md-3 col-lg-offset-1">

        <div class="panel panel-default">
            <div class="panel-body">
                <p style="text-align: center;"><strong>How WE Can Help?</strong></p>
                <!--<div class="newspaper">-->
                @foreach($help as $hlp)
                    <li><a href="#"  data-toggle="modal" data-target="#pointModal" onclick="showhelpmodal('{{$hlp->id}}');">{{$hlp->title}}</a></li>
                @endforeach
            </div>

            <!--</div>-->
        </div>
        <div class="modal fade" id="pointModal" role="dialog">
            <div class="vertical-alignment-helper">
                <div class="modal-dialog vertical-align-center">
                    <div class="modal-content" style="text-align: justify;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="modalheader"></h4>
                        </div>

                        <p class="modal-body"></p>
                        <p style="text-align: justify; padding:0% 3%" id="modalcontent"></p>
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
            @foreach($serviceslide as $service)
                <div>
                    {!! $service->content !!}
                    <div data-u="thumb">
                        <img class="i" src={{$service->thumbnail}} />
                        <div class="t">{{$service->name}}</div>
                        <div class="c">{{$service->position}}</div>
                    </div>
                </div>
            @endforeach
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
            <!--<a href='#'>info.parshuram1990@gmail.com</a>-->
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
        <div id='right'style="color:#fff;">
            <p>Connect</p>
            <div id='social'>

            </div>
            <form id="mailform">
                <p>Get in Contact</p>
                {{--<input placeholder='Email' type='email'>--}}
                <div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true">
                </div>
                <input placeholder='Phone no' type='text' name="phone" id="mailPhone" style="background-color:#fff;">
                <input placeholder='Subject' type='text' name="subject" id="mailSubject" style="background-color:#fff;">
                <textarea placeholder='Message' rows='4' name="message" id="mailMessage" style="background-color:#fff;"></textarea>
                <input placeholder='Send' type='submit' style="display: none;">
                <a style="cursor: pointer;" class="btn btn-default" onclick="sendMail();">Submit</a>
            </form>
            <p>other way</p>
            <p class='other entypo-mail'style="color:#fff;">
                <a href='#' style="color:#fff;">info@globalhr.edu.np</a>
            </p>
            <p class='other entypo-phone' style="color:#fff;">+977-1-4233140 / 4239302</p>
        </div>
    </div>
</div>