<?php
$topcountry = array("Thailand", "France", "Italy", "China", "Japan");
$country = $topcountry[array_rand($topcountry)];
require_once 'config.php';

?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="hotel, hotels, discount, reservations, Asia, Europe, America, Bangkok, Singapore, Hong Kong, Phuket, Thailand, Malaysia, Bali, London, Paris, loyalty program, acommodation, accomodation, acomodation, accommodation" />
    <meta name="description" content="Discount Hotel deals on 785,028 hotels worldwide. BOOK NOW, PAY LATER available on thousands of hotels. Fast and secure with lowest rates Guaranteed!">
    <meta name="author" content="IndoCPA">
    <title><?php strtoupper($_SERVER['SERVER_NAME']) Find Best Hotel in <?php echo $country;?> at Affordable Price</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">

    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header Plain:  add the id plain to header and change logo.png to logo_sticky.png ======================= -->
    <header id="plain">
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
<!-- 	                    <i class="icon-phone"></i><strong>0045 043204434</strong> -->
	                </div>

                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul id="top_links">
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Sign in</a>
                                    <div class="dropdown-menu">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" class="bt_facebook">
                                                    <i class="icon-facebook"></i>Facebook </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" class="bt_paypal">
                                                    <i class="icon-paypal"></i>Paypal </a>
                                            </div>
                                        </div>
                                        <div class="login-or">
                                            <hr class="hr-or">
                                            <span class="span-or">or</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputUsernameEmail" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                        <a id="forgot_pw" href="#">Forgot password?</a>
                                        <input type="submit" name="" value="Sign in" id="Sign_in" class="button_drop">
                                        <input type="submit" name="" value="Sign up" id="Sign_up" class="button_drop outline">
                                    </div>
                                </div><!-- End Dropdown access -->
                            </li>
                            <li><a href="#" id="wishlist_link">Wishlist</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="index.html"><img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true" class="logo_normal"></a>
                        <a href="index.html"><img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true" class="logo_sticky"></a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
<!--
                        <ul>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Home <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="index.html">With Hotels and Tours</a></li>
                                    <li><a href="index_2.html">With Only tours</a></li>
                                    <li><a href="index_3.html">Single image</a></li>
                                    <li><a href="index_4.html">Header video</a></li>
                                    <li><a href="index_7.html">With search panel</a></li>
                                    <li><a href="index_5.html">With map</a></li>
                                    <li><a href="index_6.html">With search bar</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Tours <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="all_tours_list.html">All tours list</a></li>
                                    <li><a href="all_tours_grid.html">All tours grid</a></li>
                                    <li><a href="single_tour.html">Single tour page</a></li>
                                    <li><a href="single_tour_with_gallery.html">Single tour with gallery</a></li>
                                    <li><a href="single_tour_working_booking.php">Single tour working booking</a></li>
                                </ul>
                            </li>
                             <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Hotels <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="all_hotels_list.html">All hotels list</a></li>
                                    <li><a href="all_hotels_grid.html">All hotels grid</a></li>
                                    <li><a href="single_hotel.html">Single hotel page</a></li>
                                    <li><a href="single_hotel_working_booking.php">Single hotel working booking</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Transfers <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="all_transfer_list.html">All transfers list</a></li>
                                    <li><a href="all_transfer_grid.html">All transfers grid</a></li>
                                    <li><a href="single_transfer.html">Single transfer page</a></li>
                                </ul>
                            </li>
                            <li class="megamenu submenu">
                                <a href="javascript:void(0);" class="show-submenu-mega">Pages &amp; elements<i class="icon-down-open-mini"></i></a>
                                <div class="menu-wrapper">
                                    <div class="col-md-4">
                                        <h3>Pages</h3>
                                        <ul>
                                            <li><a href="about.html">About us</a></li>
                                           <li><a href="general_page.html">General page</a></li>
                                            <li><a href="tourist_guide.html">Tourist guide</a></li>
                                            <li><a href="cart.html">Cart Tours</a></li>
                                            <li><a href="payment.html">Payment Tours</a></li>
                                             <li><a href="confirmation.html">Confirmation Tours</a></li>
                                             <li><a href="cart_hotel.html">Cart Hotel</a></li>
                                            <li><a href="payment_hotel.html">Payment Hotel</a></li>
                                             <li><a href="confirmation_hotel.html">Confirmation Hotel</a></li>
                                             <li><a href="wishlist.html">Wishlist page</a></li>
                                             <li><a href="faq.html">Faq</a></li>
                                             <li><a href="pricing_tables.html">Pricing tables</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Pages</h3>
                                        <ul>
                                            <li><a href="contact_us_1.html">Contact us 1</a></li>
                                            <li><a href="contact_us_2.html">Contact us 2</a></li>
                                             <li><a href="blog_right_sidebar.html">Blog</a></li>
                                            <li><a href="blog.html">Blog left sidebar</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="invoice.html" target="_blank">Invoice</a></li>
                                            <li><a href="404.html">404 Error page</a></li>
                                            <li><a href="site_launch/index.html">Site launch / Coming soon</a></li>
                                            <li><a href="gallery_3_columns.html">Gallery 3 columns</a></li>
                                            <li><a href="gallery_4_columns.html">Gallery 4 columns</a></li>
                                            <li><a href="timeline.html">Tour timeline</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Elements</h3>
                                        <ul>
                                            <li><a href="index.html"><i class="icon-columns"></i> Header transparent</a></li>
                                            <li><a href="header_plain.html"><i class="icon-columns"></i> Header plain</a></li>
                                            <li><a href="header_transparent_colored.html"><i class="icon-columns"></i> Header transparent colored</a></li>
                                            <li><a href="footer_2.html"><i class="icon-columns"></i> Footer with working newsletter</a></li>
                                            <li><a href="icon_pack_1.html"><i class="icon-inbox-alt"></i> Icon pack 1 (1900)</a></li>
                                            <li><a href="icon_pack_2.html"><i class="icon-inbox-alt"></i> Icon pack 2 (100)</a></li>
                                            <li><a href="shortcodes.html"><i class="icon-tools"></i> Shortcodes</a></li>
                                            <li><a href="newsletter_template/newsletter.html" target="blank"><i class=" icon-mail"></i> Responsive email template</a></li>
                                            <li><a href="page_with_map.html"><i class="icon-map"></i>  Full screen map</a></li>
                                        </ul>
                                    </div>
                                </div><!-- End menu-wrapper -- >
                            </li>
                        </ul>
-->
                    </div><!-- End main-menu -->
                    <ul id="top_tools">
                        <li>
                            <div class="dropdown dropdown-search">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></a>
                                <div class="dropdown-menu">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" style="margin-left:0;">
                                            <i class="icon-search"></i>
                                            </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown dropdown-cart">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" icon-basket-1"></i>Cart (0) </a>
                                <ul class="dropdown-menu" id="cart_items">
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_1.jpg" alt=""></div>
                                        <strong>
										<a href="#">Louvre museum</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_2.jpg" alt=""></div>
                                        <strong>
										<a href="#">Versailles tour</a>2x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_3.jpg" alt=""></div>
                                        <strong>
										<a href="#">Versailles tour</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div>Total: <span>$120.00</span></div>
                                        <a href="cart.html" class="button_drop">Go to cart</a>
                                        <a href="payment.html" class="button_drop outline">Check out</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->


<!--
 <section id="hero" class="subheader_plain">
 	<div class="intro_title">
		<h1 class="animated fadeInDown">Affordable Paris tours</h1>
        <p class="animated fadeInDown">CITY TOURS / TOUR TICKETS / TOUR GUIDES</p>
        <a href="all_tours_list.html" class="animated fadeInUp button_intro">View Tours</a> <a href="single_tour.html"class="animated fadeInUp button_intro outline">Read more</a>
	</div>
</section>
--><!-- End section -->


	<div class="container margin_120">

        <div class="main_title">
            <h2><?php echo $country;?> <span>Top</span> Hotels</h2>
            <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
        </div>

        <div class="row">
<?php
$countries = json_decode(IndoCPATravel($TOKEN, "https://auth.indocpa.me/hotel/?country=$country"));
foreach ($countries->data as $c) { ?>

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="hotel.php?id=<?php echo $c->data->hotel_id;?>">
                        <img src="<?php echo $c->hotel->images[1]->url;?>" class="img-responsive" alt="">
<!--                         <div class="ribbon top_rated"></div> -->
                        <div class="short_info">
                            <i class="icon_set_1_icon-44"></i><?php echo $c->data->hotel_name ?><span class="price"><sup>$</sup><?php echo $c->data->rates_from;?></span>
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong><?php echo $c->data->hotel_name;?></strong></h3>
                        <div class="rating">
                                <?php
	for ($i = 1; $i <= $c->data->star_rating; $i++) {
		echo '<i class="icon-star voted"></i>';
	}
	for ($i = 1; $i <= (5 - $c->data->star_rating); $i++) {
		echo '<i class=" icon-star-empty"></i>';
	}
?>

                            <small>(<?php echo $c->data->number_of_reviews;?>)</small>
                        </div><!-- end rating -->
<!--
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                        </div>
--> <!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

<?php
}
?>
        </div><!-- End row -->
        <p class="text-center nopadding">
            <a href="#" class="btn_1 medium"><i class="icon-eye-7"></i>View all tours (144) </a>
        </p>
    </div><!-- End container -->

    <div class="white_bg">
        <div class="container margin_60">
            <div class="main_title">
                <h2>Other <span>Popular</span> hotels</h2>
                <p>
                    Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
                </p>
            </div>
            <div class="row add_bottom_45">
                <div class="col-md-4 other_tours">
                    <ul>
<li><a href="category.php?city=Amsterdam">Amsterdam Hotels</a></li>
<li><a href="category.php?city=Bandung">Bandung Hotels</a></li>
<li><a href="category.php?city=Bangkok">Bangkok Hotels</a></li>
<li><a href="category.php?city=Chiang+Mai">Chiang Mai Hotels</a></li>
<li><a href="category.php?city=Ho+Chi+Minh+City">Ho Chi Minh City Hotels</a></li>
<li><a href="category.php?city=Hong+Kong">Hong Kong Hotels</a></li>
<li><a href="category.php?city=Jakarta">Jakarta Hotels</a></li>
<li><a href="category.php?city=Johor+Bahru">Johor Bahru Hotels</a></li>
<li><a href="category.php?city=London">London Hotels</a></li>
<li><a href="category.php?city=Malacca">Malacca Hotels</a></li>
<li><a href="category.php?city=Osaka">Osaka Hotels</a></li>
<li><a href="category.php?city=Pattaya">Pattaya Hotels</a></li>
<li><a href="category.php?city=Penang">Penang Hotels</a></li>
<li><a href="category.php?city=Phuket">Phuket Hotels</a></li>
<li><a href="category.php?city=Seoul">Seoul Hotels</a></li>
<li><a href="category.php?city=Sydney">Sydney Hotels</a></li>
<li><a href="category.php?city=Taipei">Taipei Hotels</a></li>
<li><a href="category.php?city=Tokyo">Tokyo Hotels</a></li>

                    </ul>
                </div>
                <div class="col-md-4 other_tours">
                    <ul>
<li><a href="category.php?city=Bali">Bali Hotels</a></li>
<li><a href="category.php?city=Barcelona">Barcelona Hotels</a></li>
<li><a href="category.php?city=Cebu">Cebu Hotels</a></li>
<li><a href="category.php?city=Dubai">Dubai Hotels</a></li>
<li><a href="category.php?city=Frankfurt">Frankfurt Hotels</a></li>
<li><a href="category.php?city=Hua+Hin">Hua Hin Hotels</a></li>
<li><a href="category.php?city=Krabi">Krabi Hotels</a></li>
<li><a href="category.php?city=Kuala Lumpur">Kuala Lumpur Hotels</a></li>
<li><a href="category.php?city=Kyoto">Kyoto Hotels</a></li>
<li><a href="category.php?city=Macau">Macau Hotels</a></li>
<li><a href="category.php?city=Manila">Manila Hotels</a></li>
<li><a href="category.php?city=Milan">Milan Hotels</a></li>
<li><a href="category.php?city=Munich">Munich Hotels</a></li>
<li><a href="category.php?city=Paris">Paris Hotels</a></li>
<li><a href="category.php?city=Rome">Rome Hotels</a></li>
<li><a href="category.php?city=Shanghai">Shanghai Hotels</a></li>
<li><a href="category.php?city=Singapore">Singapore Hotels</a></li>
                    </ul>
                </div>
                <div class="col-md-4 other_tours">
                    <ul>
<li><a href="category.php?city=Berlin">Berlin Hotels</a></li>
<li><a href="category.php?city=Brussels">Brussels Hotels</a></li>
<li><a href="category.php?city=Budapest">Budapest Hotels</a></li>
<li><a href="category.php?city=Chicago">Chicago Hotels</a></li>
<li><a href="category.php?city=Dublin">Dublin Hotels</a></li>
<li><a href="category.php?city=Edinburgh">Edinburgh Hotels</a></li>
<li><a href="category.php?city=Istanbul">Istanbul Hotels</a></li>
<li><a href="category.php?city=Las+Vegas">Las Vegas Hotels</a></li>
<li><a href="category.php?city=Los+Angeles">Los Angeles Hotels</a></li>
<li><a href="category.php?city=Madrid">Madrid Hotels</a></li>
<li><a href="category.php?city=Manchester">Manchester Hotels</a></li>
<li><a href="category.php?city=New+York">New York Hotels</a></li>
<li><a href="category.php?city=Orlando">Orlando Hotels</a></li>
<li><a href="category.php?city=Prague">Prague Hotels</a></li>
<li><a href="category.php?city=San+Diego">San Diego Hotels</a></li>
<li><a href="category.php?city=San+Francisco">San Francisco Hotels</a></li>
<li><a href="category.php?city=Venice">Venice Hotels</a></li>                    </ul>
                </div>
            </div><!-- End row -->

            <div class="banner colored add_bottom_30">
                <h4>Discover our Top tours <span>from $34</span></h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in.
                </p>
                <a href="single_tour.html" class="btn_1 white">Read more</a>
            </div>
<!--
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="#"><img src="img/bus.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>Sightseen tour</span> booking</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="#"><img src="img/transfer.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>Transfer</span> booking</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="#"><img src="img/guide.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>Tour guide</span> booking</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="#"><img src="img/hotel.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>Hotel</span> booking</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                </div>
            </div>
--> <!-- End row -->
        </div><!-- End container -->
    </div><!-- End white_bg -->

<!--
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1 magnific">
        <div>
            <h3>BELONG ANYWHERE</h3>
            <p>
                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
            </p>
            <a href="https://www.youtube.com/watch?v=Zz5cu72Gv5Y" class="video"><i class="icon-play-circled2-1"></i></a>
        </div>
    </div>
    </section>
--> <!-- End section -->

<!--
    <div class="container margin_60">

        <div class="main_title">
            <h2>Some <span>good</span> reasons</h2>
            <p>
                Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
            </p>
        </div>

        <div class="row">

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-41"></i>
                    <h3><span>+120</span> Premium tours</h3>
                    <p>
                         Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                    </p>
                    <a href="about.html" class="btn_1 outline">Read more</a>
                </div>
            </div>

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-30"></i>
                    <h3><span>+1000</span> Customers</h3>
                    <p>
                         Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                    </p>
                    <a href="about.html" class="btn_1 outline">Read more</a>
                </div>
            </div>

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-57"></i>
                    <h3><span>H24 </span> Support</h3>
                    <p>
                         Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                    </p>
                    <a href="about.html" class="btn_1 outline">Read more</a>
                </div>
            </div>

        </div><!--End row -- >

        <hr>

        <div class="row">
            <div class="col-md-8 col-sm-6 hidden-xs">
                <img src="img/laptop.png" alt="Laptop" class="img-responsive laptop">
            </div>
            <div class="col-md-4 col-sm-6">
                <h3><span>Get started</span> with CityTours</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                </p>
                <ul class="list_order">
                    <li><span>1</span>Select your preferred tours</li>
                    <li><span>2</span>Purchase tickets and options</li>
                    <li><span>3</span>Pick them directly from your office</li>
                </ul>
                <a href="all_tour_list.html" class="btn_1">Start now</a>
            </div>
        </div><!-- End row -- >

    </div>
--> <!-- End container -->

<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Need help?</h3>
                    <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                    <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                         <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="#">Community blog</a></li>
                        <li><a href="#">Tour guide</a></li>
                        <li><a href="#">Wishlist</a></li>
                         <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="lang">
                            <option value="English" selected>English</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                    <div class="styled-select">
                        <select class="form-control" name="currency" id="currency">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        </ul>
                        <p>© Citytours 2015</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

 <!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

  </body>
</html>