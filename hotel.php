<?php
error_reporting(E_ALL);
date_default_timezone_set(UTC);
require_once 'config.php';
$id = $_GET['id'];
$o = json_decode(IndoCPA($TOKEN, "https://auth.indocpa.me/hotel/$id"));
$trackingUrl = 'http://shop.aff-id.com/aff_c?offer_id=72&aff_id=2&url='.$o->data->hotel->websiteUrl;
$cityId = $o->data->data->city_id;
$recentBook = json_decode(IndoCPA($TOKEN, "https://auth.indocpa.me/hotel/recentlyBooked/$cityId"));
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>
        <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
        <meta http-equiv=content-script-type content="text/javascript">
        <meta http-equiv=content-style-type content="text/css">
        <meta name=google-translate-customization content=null>
        <meta name=robots content="index,follow">
        <meta property=og:title content="<?= $o->data->data->hotel_name . ' - Starts from USD' . $o->data->data->rates_from; ?>"/>
        <meta property=og:image content="<?= $o->data->data->photo1; ?>"/>
        <meta property=og:site_name content=gethotel.me />
        <meta property=og:url content="<?=$_SERVER['SERVER_NAME'];?>/hotel.php?id=<?= $id; ?>"/>
        <meta property=og:description content="<?= $o->data->data->overview; ?>"/>
        <meta property=og:image:type content="image/jpeg">
        <meta property=og:image:width content=398>
        <meta property=og:image:height content=220>
        <meta property=og:type content=article />
        <meta property=og:latitude content=<?= $o->data->data->latitude; ?> />
        <meta property=og:longitude content=<?= $o->data->data->longitude; ?> />
        <meta property=og:hotel_address content="<?= $o->data->data->addressline1 . ' ' . $o->data->data->addressline2; ?>"/>
        <meta property=og:postal_code content=<?= $o->data->data->zipcode; ?> />
        <meta property=og:country_name content=<?= $o->data->data->country; ?> />
        <meta name=twitter:card content=summary_large_image>
        <meta name=twitter:site content="@gethotelme">
        <meta name=twitter:title content="<?= $o->data->data->hotel_name . ' - Starts from USD' . $o->data->data->rates_from; ?>">
        <meta name=twitter:description content="<?= $o->data->data->overview; ?>">
        <meta name=twitter:creator content="@gethotelme">
        <meta name=twitter:image:src content="<?= $o->data->data->photo1; ?>">
        <meta name=twitter:image:width content=398>
        <meta name=twitter:image:height content=220>
        <meta name=twitter:domain content="<?=$_SERVER['SERVER_NAME'];?>/hotel.php?id=<?= $id; ?>">
        <meta charset=utf-8>
        <meta name=viewport content="user-scalable=yes"/>
        <meta name=author content="">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="<?= $o->data->data->hotel_name;?>" />
        <meta name="description" content="<?= $o->data->data->overview; ?>">
        <meta name="author" content="GetHotel">
        <title><?= $o->data->data->hotel_name . ' - Starts from USD' . $o->data->data->rates_from; ?></title>
        <link rel=canonical href="<?=$_SERVER['SERVER_NAME'];?>/hotel.php?id=<?= $id; ?>"/>
        <!-- Favicons-->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

        <!-- CSS -->
        <link href="css/base.css" rel="stylesheet">

        <!-- CSS -->
        <link href="css/slider-pro.min.css" rel="stylesheet">
        <link href="css/date_time_picker.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">

        <!-- Google web fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

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

        <!-- Header================================================== -->
        <header>
            <div id="top_line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>

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
                                            <a id="forgot_pw" href="<?= $trackingUrl; ?>">Forgot password?</a>
                                            <input type="submit" name="" value="Sign in" id="Sign_in" class="button_drop">
                                            <input type="submit" name="" value="Sign up" id="Sign_up" class="button_drop outline">
                                        </div>
                                    </div><!-- End Dropdown access -->
                                </li>
                                <li><a href="wishlist.html" id="wishlist_link">Wishlist</a></li>
                            </ul>
                        </div>
                    </div><!-- End row -->
                </div><!-- End container-->
            </div><!-- End top line-->

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div id="logo">
                            <a href="index.php"><img src="img/logo.png" width="160" height="34" alt="City tours" data-retina="true" class="logo_normal"></a>
                            <a href="index.php"><img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true" class="logo_sticky"></a>
                        </div>
                    </div>
                    <nav class="col-md-9 col-sm-9 col-xs-9">
                        <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                        <div class="main-menu">
                            <div id="header_menu">
                                <img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                            </div>
                            <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">Home <i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="index.html">With Hotels and Tours</a></li>
                                        <li><a href="index_2.html">With Only tours</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">Tours <i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="single_tour_working_booking.php">Single tour working booking</a></li>
                                    </ul>
                                </li>
                            </ul>
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" icon-basket-1"></i>Cart (1) </a>
                                    <ul class="dropdown-menu" id="cart_items">
                                        <li>
                                            <div class="image"><img src="img/thumb_cart_1.jpg" alt=""></div>
                                            <strong>
                                                <a href="<?= $trackingUrl; ?>"><?= $o->data->data->hotel_name; ?></a>1x $<?= $o->data->data->rates_from; ?>.00 </strong>
                                            <a href="<?= $trackingUrl; ?>" class="action"><i class="icon-trash"></i></a>
                                        </li>

                                        <li>
                                            <div>Total: <span>$<?= $o->data->data->rates_from; ?>.00</span></div>
                                            <a href="<?= $trackingUrl; ?>" class="button_drop">Go to cart</a>
                                            <a href="<?= $trackingUrl; ?>" class="button_drop outline">Check out</a>
                                        </li>
                                    </ul>
                                </div><!-- End dropdown-cart-->
                            </li>
                        </ul>
                    </nav>
                </div>
            </div><!-- container -->
        </header><!-- End Header -->

        <section class="parallax-window" data-parallax="scroll" data-image-src="<?=$_SERVER['SERVER_NAME'];?>/tt.php?src=<?php echo str_replace('?s=420x420', '', $o->data->hotel->images[3]->url); ?>&w=1400&h=470" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <span class="rating">
                                <?php
                                for ($i = 1; $i <= $o->data->data->star_rating; $i++) {
                                    echo '<i class="icon-star voted"></i>';
                                }
                                for ($i = 1; $i <= (5 - $o->data->data->star_rating); $i++) {
                                    echo '<i class=" icon-star-empty"></i>';
                                }
                                ?>
                            </span>
                            <h1><?= $o->data->data->hotel_name; ?></h1>
                            <span><?= $o->data->data->addressline1 . ', ' . $o->data->data->zipcode . ', ' . $o->data->data->city; ?></span>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div id="price_single_main" class="hotel">
                                from/per night <span><sup>$</sup><?= $o->data->data->rates_from; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End section -->

        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="<?= $trackingUrl; ?>">Home</a></li>
                    <li><a href="<?= $trackingUrl; ?>"><?= $o->data->data->continent_name; ?></a></li>
                    <li><a href="<?= $trackingUrl; ?>"><?= $o->data->data->country; ?></a></li>
                    <li><a href="<?= $trackingUrl; ?>"><?= $o->data->data->state; ?></a></li>
                    <li><a href="<?= $trackingUrl; ?>"><?= $o->data->data->city; ?></a></li>
                    <li><?= $o->data->data->hotel_name; ?></li>
                </ul>
            </div>
        </div><!-- End Position -->


        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div><!-- End Map -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-md-8" id="single_tour_desc">
                    <div id="single_tour_feat">
                        <ul>
                            <li><i class="icon_set_2_icon-116"></i>Plasma TV</li>
                            <li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
                            <li><i class="icon_set_2_icon-110"></i>Poll</li>
                            <li><i class="icon_set_1_icon-59"></i>Breakfast</li>
                            <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                            <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                            <li><i class="icon_set_1_icon-27"></i>Parking</li>
                        </ul>
                    </div>
                    <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a></p><!-- Map button for tablets/mobiles -->
                    <div id="Img_carousel" class="slider-pro">
                        <div class="sp-slides">
                            <?php
                            foreach ($o->data->hotel->images as $i) {
                                echo '<div class="sp-slide">';
                                echo '<img alt="" class="sp-image" src="css/images/blank.gif"';
                                echo 'data-src="' . str_replace("420x420", "1000x1000", str_replace("http", "https", $i->url)) . '"';
                                echo 'data-small="' . str_replace("420x420", "500x500", str_replace("http", "https", $i->url)) . '"';
                                echo 'data-medium="' . str_replace("420x420", "1000x1000", str_replace("http", "https", $i->url)) . '"';
                                echo 'data-large="' . str_replace("420x420", "2000x2000", str_replace("http", "https", $i->url)) . '"';
                                echo 'data-retina="' . str_replace("420x420", "2000x2000", str_replace("http", "https", $i->url)) . '"';
                                echo '>';
                                echo '<h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">' . $i->caption . '</h3>';
                                if ($i->captionText) {
                                    echo '<p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">' . $i->captionText . '</p>';
                                    echo '<p class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">black caption</p>';
                                }

                                echo '</div>';
                            }
                            ?>

                        </div>
                        <div class="sp-thumbnails">
                            <?php
                            foreach ($o->data->hotel->images as $i) {
                                echo '<img alt="" class="sp-thumbnail" src="' . str_replace("http", "https", $i->url) . '">';
                            }
                            ?>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <h3>Description</h3>
                        </div>
                        <div class="col-md-9">
                            <p>
                                <?php echo str_replace('[HOTELNAME]', $o->data->data->hotel_name, $o->data->hotel->overview); ?>
                            </p>
                            <h4>Hotel facilities</h4>
                            <p><?= $o->data->data->overview; ?></p>
<!--
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <ul class="list_ok">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>No scripta electram necessitatibus sit</li>
                                        <li>Quidam percipitur instructior an eum</li>
                                        <li>Ut est saepe munere ceteros</li>
                                        <li>No scripta electram necessitatibus sit</li>
                                        <li>Quidam percipitur instructior an eum</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <ul class="list_ok">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>No scripta electram necessitatibus sit</li>
                                        <li>Quidam percipitur instructior an eum</li>
                                        <li>No scripta electram necessitatibus sit</li>
                                    </ul>
                                </div>
                            </div>
--> <!-- End row  -->
                        </div><!-- End col-md-9  -->
                    </div><!-- End row  -->
<!--

                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Rooms Types</h3>
                        </div>
                        <div class="col-md-9">
                            <h4>Single Room</h4>
                            <p>
                                Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
                            </p>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <ul class="list_icons">
                                        <li><i class="icon_set_1_icon-86"></i> Free wifi</li>
                                        <li><i class="icon_set_2_icon-116"></i> Plasma Tv</li>
                                        <li><i class="icon_set_2_icon-106"></i> Safety  box</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <ul class="list_ok">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>No scripta electram necessitatibus sit</li>
                                        <li>Quidam percipitur instructior an eum</li>
                                    </ul>
                                </div>
                            </div> End row
                            <div class="carousel magnific-gallery">
                                <div class="item">
                                    <a href="img/carousel/1.jpg"><img src="img/carousel/1.jpg" alt="Image"></a>
                                </div>
                                <div class="item">
                                    <a href="img/carousel/2.jpg"><img src="img/carousel/2.jpg" alt="Image"></a>
                                </div>
                                <div class="item">
                                    <a href="img/carousel/3.jpg"><img src="img/carousel/3.jpg" alt="Image"></a>
                                </div>
                                <div class="item">
                                    <a href="img/carousel/4.jpg"><img src="img/carousel/4.jpg" alt="Image"></a>
                                </div>
                            </div>

                            <hr>

                            <h4>Double Room</h4>
                            <p>
                                Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
                            </p>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <ul class="list_icons">
                                        <li><i class="icon_set_1_icon-86"></i> Free wifi</li>
                                        <li><i class="icon_set_2_icon-116"></i> Plasma Tv</li>
                                        <li><i class="icon_set_2_icon-106"></i> Safety  box</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <ul class="list_ok">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>No scripta electram necessitatibus sit</li>
                                        <li>Quidam percipitur instructior an eum</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="carousel magnific-gallery">
                                <div class="item">
                                    <a href="img/carousel/1.jpg"><img src="img/carousel/1.jpg" alt="Image"></a>
                                </div>
                                <div class="item">
                                    <a href="img/carousel/2.jpg"><img src="img/carousel/2.jpg" alt="Image"></a>
                                </div>
                                <div class="item">
                                    <a href="img/carousel/3.jpg"><img src="img/carousel/3.jpg" alt="Image"></a>
                                </div>
                                <div class="item">
                                    <a href="img/carousel/4.jpg"><img src="img/carousel/4.jpg" alt="Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
-->

                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <h3>Reviews</h3>
                        </div>
                        <div class="col-md-9">
                            <div id="score_detail"><span><?= $o->data->data->rating_average; ?></span>Good <small>(Based on <?= $o->data->data->number_of_reviews; ?> reviews)</small></div><!-- End general_rating -->

                            <hr>
                            <?php
                            foreach ($o->data->hotel->reviews as $r) {
                                $cDate = date('F j Y', substr($r->checkOutDate, 6, 10));
                                $starRating = round($r->overall);
                                $starEmpty = 10 - $starRating;
                                ?>
                                <div class="review_strip_single">
                                    <!--<img src="img/avatar1.jpg" alt="" class="img-circle">-->
                                    <small> - <?= $cDate; ?> -</small>
                                    <h4><?= $r->memberName; ?>, from <?= $r->countryName; ?></h4>
                                    <p><b><?= $r->title; ?></b></p><p><?= $r->positives; ?></p><p><?= $r->comments; ?></p>
                                    <div class="rating">
                                        <?php
                                        for ($i = 1; $i <= $starRating; $i++) {
                                            echo '<i class="icon-smile voted"></i>';
                                        }
                                        for ($i = 1; $i <= $starEmpty; $i++) {
                                            echo '<i class="icon-smile"></i>';
                                        }
                                        ?>
                                    </div>
                                </div><!-- End review strip -->
                            <?php } ?>
                        </div>
                    </div>
                </div><!--End  single_tour_desc-->

                <aside class="col-md-4">
                    <p class="hidden-sm hidden-xs">
                        <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>
                    </p>
                    <div class="box_style_1 expose">
                        <?php
                        if (!count($_POST)) {
                            ?>
                            <form id="booking_hotel" action="<?php echo $_server['php_self']; ?>" method="post">
                                <h3 class="inner">Check Availability</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label><i class="icon-calendar-7"></i> Check in</label>
                                            <input class="date-pick form-control required" data-date-format="M d, D" type="text" name="check_in_hotel" id="check_in_hotel">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label><i class="icon-calendar-7"></i> Check out</label>
                                            <input class="date-pick form-control required" data-date-format="M d, D" type="text" name="check_out_hotel" id="check_out_hotel">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Adults</label>
                                            <div class="numbers-row">
                                                <input type="text" value="1" id="adults_hotel" class="qty2 form-control required" name="adults_hotel">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Children</label>
                                            <div class="numbers-row">
                                                <input type="text" value="0" id="children_hotels" class="qty2 form-control required" name="children_hotels">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control required" name="name_hotel_booking" id="name_hotel_booking" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input class="form-control required" name="last_hotel_name_booking" id="last_hotel_name_booking" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" style="position:relative">
                                    <label>Email</label>
                                    <input class="form-control required" type="email" name="email_hotel_booking" id="email_hotel_booking">
                                </div>
                                <div class="form-group" style="position:relative">
                                    <label>Telephone</label>
                                    <input class="form-control required" type="text" name="phone_hotel_booking" id="phone_hotel_booking">
                                </div>
                                <br>

                                <button type="submit" class="btn_full" onclick="window.location.href = '<?= $trackingUrl; ?>'">Check Rates</button>
                            </form>
                            <?php
                        } else {
                            ?>
                            <!-- START SEND MAIL SCRIPT -->
                            <div class="text-center">
                                <p><i class="icon-ok-circled" style="font-size:75px; color:#83c99f"></i></p>
                                <p><strong>Request Successfully Sent!</strong><br />
                                    We will contact you shortly to confirm your request!</p>
                            </div>
                            <?php
                            $mail = $_POST['email_hotel_booking'];

                            $to = "$email"; /* YOUR EMAIL HERE */
                            $subject = "Request From CityTours";
                            $headers = "From: CityTours <noreply@yourdomain.com>";
                            $message = "BOOKING for HOTEL Concordia Paris\n";
                            $message .= "\nCheck in: " . $_POST['check_in_hotel'];
                            $message .= "\nCheck out: " . $_POST['check_out_hotel'];
                            $message .= "\nAdults: " . $_POST['adults_hotel'];
                            $message .= "\nChildren: " . $_POST['children_hotels'];
                            $message .= "\nName: " . $_POST['name_hotel_booking'];
                            $message .= "\nLast name: " . $_POST['last_hotel_name_booking'];
                            $message .= "\nEmail: " . $_POST['email_hotel_booking'];
                            $message .= "\nTelephone: " . $_POST['phone_hotel_booking'];

                            //Receive Variable
                            $sentOk = mail($to, $subject, $message, $headers);

                            //Confirmation page
                            $user = "$mail";
                            $usersubject = "Thank You - Booking summary from CityTours";
                            $userheaders = "From: info@citytours.com\n";
                            //Confirmation page WITH  SUMMARY
                            $usermessage = "Thank you for your time, request successfully sent!.\nWe will contact you shortly to confirm your request!\n\n$message";
                            mail($user, $usersubject, $usermessage, $userheaders);
                        }
                        ?>
                        <!-- END SEND MAIL SCRIPT -->
                    </div><!--/box_style_1 -->



                </aside>
            </div><!--End row -->
        </div><!--End container -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3">
                        <h3>Need help?</h3>
                        <a href="<?= $trackingUrl; ?>" id="phone">+45 423 445 99</a>
                        <a href="<?= $trackingUrl; ?>" id="email_footer">help@citytours.com</a>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h3>About</h3>
                        <ul>
                            <li><a href="<?= $trackingUrl; ?>">About us</a></li>
                            <li><a href="<?= $trackingUrl; ?>">FAQ</a></li>
                            <li><a href="<?= $trackingUrl; ?>">Login</a></li>
                            <li><a href="<?= $trackingUrl; ?>">Register</a></li>
                            <li><a href="<?= $trackingUrl; ?>">Terms and condition</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h3>Discover</h3>
                        <ul>
                            <li><a href="<?= $trackingUrl; ?>">Community blog</a></li>
                            <li><a href="<?= $trackingUrl; ?>">Tour guide</a></li>
                            <li><a href="<?= $trackingUrl; ?>">Wishlist</a></li>
                            <li><a href="<?= $trackingUrl; ?>">Gallery</a></li>
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

        <div id="overlay"></div><!-- Mask on input focus -->

        <!-- Common scripts -->
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>

        <!-- Specific scripts -->
        <script src="js/icheck.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script>
                                            $('input').iCheck({
                                    checkboxClass: 'icheckbox_square-grey',
                                            radioClass: 'iradio_square-grey'
                                    });</script>
        <!-- Date and time pickers -->
        <script src="js/jquery.sliderPro.min.js"></script>
        <script type="text/javascript">
                                            $(document).ready(function($) {
                                    $('#Img_carousel').sliderPro({
                                    width: 960,
                                            height: 500,
                                            fade: true,
                                            arrows: true,
                                            buttons: false,
                                            fullScreen: false,
                                            smallSize: 500,
                                            startSlide: 0,
                                            mediumSize: 1000,
                                            largeSize: 3000,
                                            thumbnailArrows: true,
                                            autoplay: false
                                    });
                                    });</script>
        <!-- Date and time pickers -->
        <script src="js/bootstrap-datepicker.js"></script>
        <script>
                                            $("#booking_hotel").validate();
                                            $('input.date-pick').datepicker();</script>
        <!-- Map -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <!--<script src="js/map.js"></script>-->
        <script src="js/infobox.js"></script>
        <!-- Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <script>
                                            $(document).ready(function() {
                                    $(".carousel").owlCarousel({
                                    items: 4,
                                            itemsDesktop: [1199, 3],
                                            itemsDesktopSmall: [979, 3]
                                    });
                                    });</script>
        <script>
                    $('#collapseMap').on('shown.bs.collapse', function(e) {
            (function(A) {

            if (!Array.prototype.forEach)
                    A.forEach = A.forEach || function(action, that) {
                    for (var i = 0, l = this.length; i < l; i++)
                            if (i in this)
                            action.call(that, this[i], i, this);
                    };
            })(Array.prototype);
                    var
                    mapObject,
                    markers = [],
                    markersData = {
                    //Sightseeing, Museums, Skyline, Eat_drink, Walking, Churches
<?php
echo "'Sightseeing':[";
foreach ($o->data->hotelPOIData->attractionList as $al) {
    if ($al->attractionType != 1) {
        ?>
                            {
                            name: '<?= $al->name; ?>',
                                    location_latitude: <?= $al->latitude; ?>,
                                    location_longitude: <?= $al->longitude; ?>,
                                    //                                    map_image_url: 'img/thumb_map_1.jpg',
                                    name_point: '<?= $al->name; ?>',
                                    description_point: 'Located approximately <?= $al->distance . ' km from the hotel'; ?>',
                                    url_point: '<?= $a->hotel->websiteUrl ; ?>'
                            },
        <?php
    }
}
echo "],";


echo "'Museums':[";
foreach ($o->data->hotelPOIData->attractionList as $al) {
    if ($al->attractionType == 1) {
        ?>
                            {
                            name: '<?= $al->name; ?>',
                                    location_latitude: <?= $al->latitude; ?>,
                                    location_longitude: <?= $al->longitude; ?>,
                                    map_image_url: 'img/thumb_map_1.jpg',
                                    name_point: '<?= $al->name; ?>',
                                    description_point: 'Located approximately <?= $al->distance . ' km from the hotel'; ?>',
                                    url_point: '<?= $o->data->hotel->websiteUrl . '?cid=1583179'; ?>'
                            },
        <?php
    }
}
echo "],";
?>

                    'Single_hotel': [
                    {
                    name: '<?= $o->data->data->hotel_translated_name; ?>',
                            location_latitude: <?= $o->data->data->latitude; ?>,
                            location_longitude: <?= $o->data->data->longitude; ?>,
                            map_image_url: 'img/thumb_map_1.jpg',
                            name_point: '<?= $o->data->data->hotel_translated_name; ?>',
                            description_point: '<?= $o->data->hotel->hotelAddress; ?>',
                            url_point: '<?= $o->data->hotel->websiteUrl . '?cid=1583179'; ?>'
                    }
                    ]


                    };
                    var mapOptions = {
                    zoom: 14,
                            center: new google.maps.LatLng(<?= $o->data->data->latitude; ?>, <?= $o->data->data->longitude; ?>),
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            mapTypeControl: false,
                            mapTypeControlOptions: {
                            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                                    position: google.maps.ControlPosition.LEFT_CENTER
                            },
                            panControl: false,
                            panControlOptions: {
                            position: google.maps.ControlPosition.TOP_RIGHT
                            },
                            zoomControl: true,
                            zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.LARGE,
                                    position: google.maps.ControlPosition.TOP_RIGHT
                            },
                            scrollwheel: false,
                            scaleControl: false,
                            scaleControlOptions: {
                            position: google.maps.ControlPosition.TOP_LEFT
                            },
                            streetViewControl: true,
                            streetViewControlOptions: {
                            position: google.maps.ControlPosition.LEFT_TOP
                            },
                            styles: [/*map styles*/]
                    };
                    var
                    marker;
                    mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);
                    for (var key in markersData)
                    markersData[key].forEach(function(item) {
            marker = new google.maps.Marker({
            position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
                    map: mapObject,
                    icon: 'img/pins/' + key + '.png',
            });
                    if ('undefined' === typeof markers[key])
                    markers[key] = [];
                    markers[key].push(marker);
                    google.maps.event.addListener(marker, 'click', (function() {
                    closeInfoBox();
                            getInfoBox(item).open(mapObject, this);
                            mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
                    }));
            });
                    function hideAllMarkers() {
                    for (var key in markers)
                            markers[key].forEach(function(marker) {
                    marker.setMap(null);
                    });
                    }
            ;
                    function closeInfoBox() {
                    $('div.infoBox').remove();
                    }
            ;
                    function getInfoBox(item) {
                    return new InfoBox({
                    content:
                            '<div class="marker_info" id="marker_info">' +
                            '<img src="' + item.map_image_url + '" alt=""/>' +
                            '<h3>' + item.name_point + '</h3>' +
                            '<span>' + item.description_point + '</span>' +
                            '<a href="' + item.url_point + '" class="btn_1">Details</a>' +
                            '</div>',
                            disableAutoPan: true,
                            maxWidth: 0,
                            pixelOffset: new google.maps.Size(40, - 190),
                            closeBoxMargin: '5px -20px 2px 2px',
                            closeBoxURL: "https://www.google.com/intl/en_us/mapfiles/close.gif",
                            isHidden: false,
                            pane: 'floatPane',
                            enableEventPropagation: true
                    });
                    }
            ;
            });
        </script>
    </body >
</html>