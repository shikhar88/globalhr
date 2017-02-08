<footer class="footer-distributed">

    <div class="footer-left" style="text-align: left">
        <h3>Global<span>HR</span></h3>

        <p class="footer-links">
            <a href="index.php">Home</a>
            <!--·-->
            <!--<a href="#">Blog</a>-->
            <!--·-->
            <!--<a href="#">Pricing</a>-->
            <!--·-->
            <a href="index.php">About</a>
            <!--·-->
            <!--<a href="#">Faq</a>-->
            <!--·-->
            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Global HR &copy; 2017</p>

    </div>

    <i class="divider"></i>

    <div class="footer-center" style="text-align: left">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>{{$comapnydetail->location}}</span></p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>{{$comapnydetail->contact}}</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a >{{$comapnydetail->email1}}</a> </p>
            <p style="margin-left: 17%">  <a >{{$comapnydetail->email2}}</a></p>
        </div>

    </div>

    <i class="divider"></i>
    <div class="footer-right" style="text-align: left">

        <p class="footer-company-about">
            <span>About the company</span>
            {{$comapnydetail->aboutcompany}}
        </p>

        <div class="footer-icons">

            <a href="http://{{$comapnydetail->fb}}" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="http://{{$comapnydetail->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="http://{{$comapnydetail->googleplus}}" target="_blank"><i class="fa fa-google-plus"></i></a>
            {{--<a href="#"><i class="fa fa-home"></i></a>--}}

        </div>

    </div>

</footer>