<div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6"><div class="social-grid">
                                <ul class="list-unstyled text-right">
                                    <li><a><i class="fa fa-facebook"></i></a></li>
                                    <li><a><i class="fa fa-twitter"></i></a></li>
                                    <li><a><i class="fa fa-linkedin"></i></a></li>
                                    <li><a><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div></div>
                    </div>
                </div>
            </div>
<header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                                    <a href="master.blade.php"><span>vacay</span>home</a>
                                </div>                       
                            </div>
                            <div class="col-sm-6 visible-sm">
                                <div class="text-right"><button type="button" class="book-now-btn">Book Now</button></div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a  data-hover="Home" href="{{route('home')}}" class="{{ ($title === 'Home')? 'active' : '' }}"><span>Home</span></a></li>
                                            <li><a data-hover="About"  href="about" class="{{ ($title === 'about')? 'active' : '' }}"><span>About</span></a></li>
                                            <li><a data-hover="Rooms"  href="rooms" class="{{ ($title === 'rooms')? 'active' : '' }}"><span>Rooms</span></a></li>
                                            <!-- <li><a data-hover="Gallery"  href="gallery.html"><span>Gallery</span></a></li> -->
                                            <li><a data-hover="Dinning" href="dinning" class="{{ ($title === 'dinning')? 'active' : '' }}"><span>Dinning</span></a></li>
                                            <li><a data-hover="News" href="{{route('news')}}" class="{{ ($title === 'news')? 'active' : '' }}"><span>News</span></a></li>
                                            <li><a data-hover="Contact Us" href="contact" class="{{ ($title === 'contact')? 'active' : '' }}"><span>contact Us</span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                                <div class="text-right"><button type="button" class="book-now-btn">Book Now</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>