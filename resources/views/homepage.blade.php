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

<div id="myCarousel" class="carousel slide" data-ride="carousel" id="home">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="assets/images/Usa.png"/>
        </div>

        <div class="item">
            <img src="assets/images/portfolio/fullsize/2.jpg" alt="Chania">
        </div>

        <div class="item">
            <img src="assets/images/portfolio/fullsize/3.jpg" alt="Flower">
        </div>

        <div class="item">
            <img src="assets/images/portfolio/fullsize/4.jpg" alt="Flower">
        </div>
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
                                            <img src="assets/images/Usa.png" alt="Avatar" class="image" style="width:100%">
                                            <div class="middle">
                                                <div style="padding: 1%"> United States of America commonly known as USA is a country having migrants to try their luck from more than 150 countries!</div>
                                            </div>
                                            <div class="desc" style="padding-left: 14%;text-align: left">Study In United State
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 15%"></div>
                                    <div class="container_my">
                                        <div class="img">
                                            <img src="assets/images/Australia.png" alt="Avatar" class="image" style="width:100%">
                                            <div class="middle">
                                                <div style="padding: 1%"> Australia has the third highest number of international students in the world behind only the United Kingdom.</div>
                                            </div>
                                            <div class="desc" style="padding-left: 14%;text-align: left">Study In Australia
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="container_my">
                                        <div class="img">
                                            <img src="assets/images/new_zealand.png" alt="Avatar" class="image" style="width:100%">
                                            <div class="middle">
                                                <div style="padding: 1%">  Every new day in the world starts in New Zealand. Nepali students choose NZ as their preferred destination to study.</div>
                                            </div>
                                            <div class="desc" style="padding-left: 14%;text-align: left">Study In New Zealand
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 15%"></div>
                                    <div class="container_my">
                                        <div class="img">
                                            <img src="assets/images/no_image.jpg" alt="Avatar" class="image" style="width:100%">
                                            <div class="middle">
                                                <div style="padding: 1%"> No text</div>
                                            </div>
                                            <div class="desc" style="padding-left: 14%;text-align: left">Study In Europe
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
    </div>
    <div class="col-lg-1"></div>
</div>
<!-- /.row -->

<!-- Portfolio Section -->
<div class="row" style="background-color:#F7F6F0 ">
    <div class="col-lg-12" style="color:#666; text-align:center">
        <h2 class="page-header1" style="color: #666">Portfolio Heading</h2>
        <div class="head_line"></div>
    </div>

    <div class="col-lg-1"></div>
    <div class="col-lg-10 divPadding">
        <div class="col-lg-3 col-sm-6">
            <a href="assets/images/portfolio/fullsize/1.jpg" class="portfolio-box">
                <img src="assets/images/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                <div class="portfolio-box-caption">
                    <div class="portfolio-box-caption-content">
                        <div class="project-category text-faded" style="text-align:center">
                            Category
                        </div>
                        <div class="project-name" style="text-align:center">
                            Project Name
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="portfolio-item.html">

                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">

            </a>

        </div>
        <div class="col-md-3 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
    </div>
    <div class="col-lg-1"></div>

</div>
<!-- /.row -->

<!-- Features Section -->
<div class="row">
    <div class="col-lg-12 divPadding" style="text-align:center" id="company_feature">
        <h2 class="page-header1">Services</h2>
        <div class="head_line"></div>
    </div>


    <div class="col-md-7 col-lg-offset-1">

        <div class="panel panel-default">
            <div class="panel-body">
                <p style="text-align: center;"><strong>How WE Can Help?</strong></p>
                <div class="newspaper">
                    <li>Guaranteed scholarships for deserving students</li>
                    <li> Perfect Visa Guidance</li>
                    <li> Well Experienced Staff</li>
                    <li> Work Honesty</li>
                    <li> Homely Environment</li>
                    <li> Expert Advice For Low Fund Course</li>
                    <li> Application Processing</li>
                    <li> Free Interview Training</li>
                    <li> Pre-departure & Post Landing Services</li>
                    <li> Air Ticket & Forex Arrangement</li>
                    <li> Accommodation Arrangement</li>
                    <li> College University Transfer</li>
                    <li> Visa Extension</li>
                    <li> No Charges for Spouse Visa</li>
                    <li> Finance Assistance</li>
                    <li> Parents & Family Visa Supports</li>
                    <li> Pay After Visa Facility</li>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-3">
        <img class="img-responsive" src="http://placehold.it/700x450" alt="">
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
            <form>
                <p>Get in Contact</p>
                <input placeholder='Email' type='email'>
                <input placeholder='Subject' type='text'>
                <textarea placeholder='Message' rows='4'></textarea>
                <input placeholder='Send' type='submit'>
            </form>
            <p>other way</p>
            <p class='other entypo-mail'>
                <a href='#'>sharma.parshuram1990@gmail.com</a>
            </p>
            <p class='other entypo-phone'>+977-9841095697</p>
        </div>
    </div>
</div>
@include('footer')
<script src="assets/js/jquery.js"></script>

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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZL5YdXuEIRgO6G4eUH1rBHOfYhy0rmMk&callback=myMap"></script>
</body>
</html>