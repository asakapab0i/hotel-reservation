<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author Bryan's Workplace
 */
class globalInclude {

    //for header and menu
    function topmenu($curPage) {
        echo ' 
        <div class="bg1">
            <div class="bg2">
                <div class="main">
                    <!-- header -->            
                    <header>
                            <h1><a href="index.php" id="logo">LoungeHotel</a></h1>
                            <div class="department">
                                9863 - 9867 Mill Road, LA, MG09 99HT<br>
                                <span>Freephone: &nbsp;  +1 800 559 6580</span>
                            </div>
                        </header>
                       
                            <nav>
                                <ul id="menu">';

        if ($curPage == 'index') {

            echo '<li class="active"><a href="index.php"><cufon class="cufon cufon-canvas" alt="About " style="width: 51px; height: 16px;"><canvas width="68" height="22" style="width: 68px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>About </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Us" style="width: 21px; height: 16px;"><canvas width="34" height="22" style="width: 34px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Us</cufontext></cufon></a></li>
                                    <li><a href="services.php"><cufon class="cufon cufon-canvas" alt="Services" style="width: 65px; height: 16px;"><canvas width="78" height="22" style="width: 78px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Services</cufontext></cufon></a></li>
                                    <li><a href="booking.php"><cufon class="cufon cufon-canvas" alt="Booking" style="width: 64px; height: 16px;"><canvas width="77" height="22" style="width: 77px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Booking</cufontext></cufon></a></li>
                                    <li><a href="rooms.php"><cufon class="cufon cufon-canvas" alt="Rooms" style="width: 54px; height: 16px;"><canvas width="67" height="22" style="width: 67px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Rooms</cufontext></cufon></a></li>
                                    <li><a href="contact.php"><cufon class="cufon cufon-canvas" alt="Locations" style="width: 76px; height: 16px;"><canvas width="89" height="22" style="width: 89px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Locations</cufontext></cufon></a></li>
                                </ul>
                            </nav>  
                            <!-- header end -->';
        } elseif ($curPage == 'services') {
            echo '<li><a href="index.php"><cufon class="cufon cufon-canvas" alt="About " style="width: 51px; height: 16px;"><canvas width="68" height="22" style="width: 68px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>About </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Us" style="width: 21px; height: 16px;"><canvas width="34" height="22" style="width: 34px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Us</cufontext></cufon></a></li>
                                    <li class="active"><a href="services.php"><cufon class="cufon cufon-canvas" alt="Services" style="width: 65px; height: 16px;"><canvas width="78" height="22" style="width: 78px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Services</cufontext></cufon></a></li>
                                    <li><a href="booking.php"><cufon class="cufon cufon-canvas" alt="Booking" style="width: 64px; height: 16px;"><canvas width="77" height="22" style="width: 77px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Booking</cufontext></cufon></a></li>
                                    <li><a href="rooms.php"><cufon class="cufon cufon-canvas" alt="Rooms" style="width: 54px; height: 16px;"><canvas width="67" height="22" style="width: 67px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Rooms</cufontext></cufon></a></li>
                                    <li><a href="contact.php"><cufon class="cufon cufon-canvas" alt="Locations" style="width: 76px; height: 16px;"><canvas width="89" height="22" style="width: 89px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Locations</cufontext></cufon></a></li>
                                </ul>
                            </nav>  
                            <!-- header end -->';
        } else if ($curPage == 'booking') {
            echo '<li><a href="index.php"><cufon class="cufon cufon-canvas" alt="About " style="width: 51px; height: 16px;"><canvas width="68" height="22" style="width: 68px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>About </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Us" style="width: 21px; height: 16px;"><canvas width="34" height="22" style="width: 34px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Us</cufontext></cufon></a></li>
                                    <li ><a href="services.php"><cufon class="cufon cufon-canvas" alt="Services" style="width: 65px; height: 16px;"><canvas width="78" height="22" style="width: 78px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Services</cufontext></cufon></a></li>
                                    <li class="active"><a href="booking.php"><cufon class="cufon cufon-canvas" alt="Booking" style="width: 64px; height: 16px;"><canvas width="77" height="22" style="width: 77px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Booking</cufontext></cufon></a></li>
                                    <li><a href="rooms.php"><cufon class="cufon cufon-canvas" alt="Rooms" style="width: 54px; height: 16px;"><canvas width="67" height="22" style="width: 67px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Rooms</cufontext></cufon></a></li>
                                    <li><a href="contact.php"><cufon class="cufon cufon-canvas" alt="Locations" style="width: 76px; height: 16px;"><canvas width="89" height="22" style="width: 89px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Locations</cufontext></cufon></a></li>
                                </ul>
                            </nav>  
                            <!-- header end -->';
        } else if ($curPage == 'rooms') {
            echo '<li><a href="index.php"><cufon class="cufon cufon-canvas" alt="About " style="width: 51px; height: 16px;"><canvas width="68" height="22" style="width: 68px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>About </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Us" style="width: 21px; height: 16px;"><canvas width="34" height="22" style="width: 34px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Us</cufontext></cufon></a></li>
                                    <li ><a href="services.php"><cufon class="cufon cufon-canvas" alt="Services" style="width: 65px; height: 16px;"><canvas width="78" height="22" style="width: 78px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Services</cufontext></cufon></a></li>
                                    <li ><a href="booking.php"><cufon class="cufon cufon-canvas" alt="Booking" style="width: 64px; height: 16px;"><canvas width="77" height="22" style="width: 77px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Booking</cufontext></cufon></a></li>
                                    <li class="active"><a href="rooms.php"><cufon class="cufon cufon-canvas" alt="Rooms" style="width: 54px; height: 16px;"><canvas width="67" height="22" style="width: 67px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Rooms</cufontext></cufon></a></li>
                                    <li><a href="contact.php"><cufon class="cufon cufon-canvas" alt="Locations" style="width: 76px; height: 16px;"><canvas width="89" height="22" style="width: 89px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Locations</cufontext></cufon></a></li>
                                </ul>
                            </nav>  
                            <!-- header end -->';
        } else if ($curPage == 'contact') {
            echo '<li><a href="index.php"><cufon class="cufon cufon-canvas" alt="About " style="width: 51px; height: 16px;"><canvas width="68" height="22" style="width: 68px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>About </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Us" style="width: 21px; height: 16px;"><canvas width="34" height="22" style="width: 34px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Us</cufontext></cufon></a></li>
                                    <li ><a href="services.php"><cufon class="cufon cufon-canvas" alt="Services" style="width: 65px; height: 16px;"><canvas width="78" height="22" style="width: 78px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Services</cufontext></cufon></a></li>
                                    <li ><a href="booking.php"><cufon class="cufon cufon-canvas" alt="Booking" style="width: 64px; height: 16px;"><canvas width="77" height="22" style="width: 77px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Booking</cufontext></cufon></a></li>
                                    <li ><a href="rooms.php"><cufon class="cufon cufon-canvas" alt="Rooms" style="width: 54px; height: 16px;"><canvas width="67" height="22" style="width: 67px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Rooms</cufontext></cufon></a></li>
                                    <li class="active"><a href="contact.php"><cufon class="cufon cufon-canvas" alt="Locations" style="width: 76px; height: 16px;"><canvas width="89" height="22" style="width: 89px; height: 22px; top: -4px; left: -1px;"></canvas><cufontext>Locations</cufontext></cufon></a></li>
                                </ul>
                            </nav>  
                            <!-- header end -->';
        }
    }

    function footermenu() {

        echo ' <!-- footer -->
        <div class="main">
            <footer>
                <div class="col2">
                    Lounge Hotel © 2013
                    <nav>
                        <ul id="footer_menu">
                            <li><a href="index.html">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Booking</a></li>
                            <li><a href="#">Rooms</a></li>
                            <li class="last"><a href="#">Locations</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col1 pad_left1">
                    <ul id="icons">
                        <li><a href="#" class="normaltip" title="Linkedin"><img src="assets/img/icon1.jpg" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Facebook"><img src="assets/img/icon2.jpg" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Picasa"><img src="assets/img/icon3.jpg" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Twitter"><img src="assets/img/icon4.jpg" alt=""></a></li>
                    </ul>
                </div>				
                <!-- {%FOOTER_LINK} -->
            </footer>
            <!-- footer end -->
        </div>';
    }

    function header() {
        echo '
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cebu Northwinds Hotel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
        <script type="text/javascript" src="assets/js/jquery-1.6.js"></script>
        <script type="text/javascript" src="assets/js/cufon-yui.js"></script><style type="text/css">cufon{text-indent:0!important;}@media screen,projection{cufon{display:inline!important;display:inline-block!important;position:relative!important;vertical-align:middle!important;font-size:1px!important;line-height:1px!important;}cufon cufontext{display:-moz-inline-box!important;display:inline-block!important;width:0!important;height:0!important;overflow:hidden!important;text-indent:-10000in!important;}cufon canvas{position:relative!important;}}@media print{cufon{padding:0!important;}cufon canvas{display:none!important;}}</style>
        <script type="text/javascript" src="assets/js/cufon-replace.js"></script>  
        <script type="text/javascript" src="assets/js/Adamina_400.font.js"></script>
        <script type="text/javascript" src="assets/js/kwicks-1.5.1.pack.js"></script>
        <script type="text/javascript" src="assets/js/atooltip.jquery.js"></script>
        <script type="text/javascript" src="assets/js/jquery.jqtransform.js"></script>
        <script type="text/javascript" src="assets/js/modal.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>

        <!--[if lt IE 9]>
                <script type="text/javascript" src="assets/js/html5.js"></script>
                <link rel="stylesheet" href="assets/css/ie.css" type="text/css" media="all">
        <![endif]-->
        <!--[if lt IE 7]>
                <div style=" clear: both;
        text-align:center;
        position: relative;
        ">
                        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
                </div>
        <![endif]-->
   ';
    }

    function modalScript() {

        echo '<div id="basic-modal-content">
            <h2>Choose a room</h2>
            <div class="rooms">
                <div class="wrapper pad_bot2">
                    <figure class="left marg_right1"><img src="assets/img//page2_img1.jpg" alt=""></figure>
                    <p class="pad_bot1"><strong class="color1">At vero eos et accusamus et iusto odio</strong><br>
                        Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi quisquam est, qui dolorem ipsum sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum.</p>
                    <a href="confirmbooking.php?rmtype=standard" class="button2">Book now</a>
                </div>
                <div class="wrapper pad_bot2">
                    <figure class="left marg_right1"><img src="assets/img//page2_img1.jpg" alt=""></figure>
                    <p class="pad_bot1"><strong class="color1">At vero eos et accusamus et iusto odio</strong><br>
                        Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi quisquam est, qui dolorem ipsum sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum.</p>
                    <a href="#" class="button2">Book now</a>
                </div>
                <div class="wrapper pad_bot2">
                    <figure class="left marg_right1"><img src="assets/img//page2_img1.jpg" alt=""></figure>
                    <p class="pad_bot1"><strong class="color1">At vero eos et accusamus et iusto odio</strong><br>
                        Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi quisquam est, qui dolorem ipsum sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum.</p>
                    <a href="#" class="button2">Book now</a>
                </div>
                <div class="wrapper pad_bot2">
                    <figure class="left marg_right1"><img src="assets/img//page2_img1.jpg" alt=""></figure>
                    <p class="pad_bot1"><strong class="color1">At vero eos et accusamus et iusto odio</strong><br>
                        Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi quisquam est, qui dolorem ipsum sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum.</p>
                    <a href="#" class="button2">Book now</a>
                </div>
            </div>
        </div>
    </div>';
    }

}

$global = new globalInclude();
