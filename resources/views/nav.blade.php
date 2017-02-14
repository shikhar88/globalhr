<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<p> Lorem ipsum <a href="#"><span data-title="sollicitudin">sollicitudin</span></a>. Possimus nulla.</p>-->
            <p><a class="navbar-brand" style="cursor: pointer" onclick="loadHome('1')"><img src="{{$logo}}" height="100%" width="100%"></a></p>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a style="cursor: pointer" onclick="scrollUpHome();" id="homemenu">Home</a>
                </li>
                <li>
                    <a style="cursor: pointer" onclick="scrollDownAboutUs();" id="aboutmenu">About</a>
                </li>
                <li>
                    <a style="cursor: pointer" onclick="scrollDownCompanuFeature();" id="servicesmenu">Services</a>
                </li>
                <li>
                    <a style="cursor: pointer" onclick="scrollDownContact();" id="contactmenu">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Study Abroad <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a onclick="study('study/usa')">USA</a>
                        </li>
                        <li>
                            <a onclick="study('study/australia')">Australia</a>
                        </li>
                        <li>
                            <a onclick="study('study/newzealand')">New Zealand</a>
                        </li>
                        <li>
                            <a onclick="study('study/europe')">Europe</a>
                        </li>

                    </ul>
                </li>

            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

