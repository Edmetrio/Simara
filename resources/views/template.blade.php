<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entrada</title>
    <!-- favion -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicon-16x16.png')}}" />
    <!-- link to font awesome -->
    <link media="all" rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/font-awesome.css')}}" />
    <!-- link to material icon font -->
    <link media="all" rel="stylesheet" href="{{asset('assets/vendors/material-design-icons/material-icons.css')}}" />
    <!-- link to custom icomoon fonts -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fonts/icomoon/icomoon.css')}}" />
    <!-- link to wow js animation -->
    <link media="all" rel="stylesheet" href="{{asset('assets/vendors/animate/animate.css')}}" />
    <!-- include bootstrap css -->
    <link media="all" rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" />
    <!-- include owl css -->
    <link media="all" rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.carousel.css')}}" />
    <link media="all" rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.theme.css')}}" />
    <!-- include main css -->
    <link media="all" rel="stylesheet" href="{{ asset('assets/css/main.css')}}" />
    <!-- link to revolution css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/revolution/css/settings.css')}}" />
</head>

<body>
    <!-- <div class="preloader" id="pageLoad">
        <div class="holder">
            <div class="coffee_cup"></div>
        </div>
    </div> -->
    <!-- main wrapper -->
    <div id="wrapper">
        <div class="page-wrapper">
            <!-- main header -->
            <header id="header" class="white-header">
                <div class="container-fluid">
                    <!-- logo -->
                    <div class="logo">
                        <a href="index.html">
                            <img class="normal" src="{{asset('assets/img/logos/logo.svg')}}" alt="Entrada" />
                            <img class="gray-logo" src="{{asset('assets/img/logos/logo-gray.svg')}}" alt="Entrada" />
                        </a>
                    </div>
                    <!-- main navigation -->
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle nav-opener" data-toggle="collapse" data-target="#nav">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- main menu items and drop for mobile -->
                        <div class="collapse navbar-collapse" id="nav">
                            <!-- main navbar -->
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="icon-angle-down"></b></a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a href="index.html">Home - Icon Bar</a></li>
                                            <li>
                                                <a href="home-search-bar.html">Home - Tour Search</a>
                                            </li>
                                            <li>
                                                <a href="home-icon-search.html">Home - Icon + Search</a>
                                            </li>
                                            <li>
                                                <a href="home-revolution.html">Home - Revolution</a>
                                            </li>
                                            <li>
                                                <a href="home-parallax.html">Home - Parallax</a>
                                            </li>
                                            <li>
                                                <a href="home-html5-video.html">Home - HTML5 Video</a>
                                            </li>
                                            <li>
                                                <a href="home-static-image.html">Home - Static Image</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tour Listing <b class="icon-angle-down"></b></a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li>
                                                <a href="grid-view-2-column.html">Grid View - 2 Column</a>
                                            </li>
                                            <li>
                                                <a href="grid-view-3-column.html">Grid View - 3 Column</a>
                                            </li>
                                            <li>
                                                <a href="grid-view-4-column.html">Grid View - 4 Column</a>
                                            </li>
                                            <li>
                                                <a href="grid-view-sidebar.html">Grid View - Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="grid-view-full-width.html">Grid View - Full Width</a>
                                            </li>
                                            <li>
                                                <a href="list-view-normal.html">List View - Normal</a>
                                            </li>
                                            <li>
                                                <a href="list-view-detail.html">List View - Detail</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="tour-detail.html">Tour Detail</a></li>
                                <li class="dropdown has-mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Activities <b class="icon-angle-down"></b></a>
                                    <div class="dropdown-menu">
                                        <div class="drop-wrap">
                                            <div class="drop-holder">
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="col">
                                                            <div class="img-wrap">
                                                                <a href="hiking-camping.html"><img src="{{asset('assets/img/generic/img-01.jpg')}}" height="228" width="350" alt="image description" /></a>
                                                            </div>
                                                            <div class="des">
                                                                <strong class="title"><a href="hiking-camping.html">Hiking/Camping</a></strong>
                                                                <p>
                                                                    A good backpacker minimizes their impact on
                                                                    the environment, including staying on
                                                                    established trails, not disturbing
                                                                    vegetation, and carrying garbage out.
                                                                </p>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="col">
                                                            <div class="img-wrap">
                                                                <a href="jungle-safari.html"><img src="{{asset('assets/img/generic/img-02.jpg')}}" height="215" width="370" alt="image description" /></a>
                                                            </div>
                                                            <div class="des">
                                                                <strong class="title"><a href="jungle-safari.html">Jungle Safari</a></strong>
                                                                <p>
                                                                    In the past, the trip was often a big-game
                                                                    hunt, but today, safari often refers to
                                                                    trips to observe and photograph wildlife—or
                                                                    hiking and sight-seeing as well.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="col">
                                                            <div class="img-wrap">
                                                                <a href="city-tour.html"><img src="{{asset('assets/img/generic/img-03.jpg')}}" height="215" width="370" alt="image description" /></a>
                                                            </div>
                                                            <div class="des">
                                                                <strong class="title"><a href="city-tour.html">Urban City Tour</a></strong>
                                                                <p>
                                                                    The type of urban city tour considered here
                                                                    is a full, partial-day, or longer tour of a
                                                                    historical, or cultural or artistic site in
                                                                    one or more tourist destinations.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="col">
                                                            <div class="img-wrap">
                                                                <a href="family-fun.html"><img src="{{asset('assets/img/generic/img-04.jpg')}}" height="215" width="370" alt="image description" /></a>
                                                            </div>
                                                            <div class="des">
                                                                <strong class="title"><a href="family-fun.html">Family Fun</a></strong>
                                                                <p>
                                                                    A community area is available on Trafalgar’s
                                                                    website offering members the opportunity to
                                                                    interact with fellow travelers by joining
                                                                    groups, contributing to forums.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown has-mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="icon-angle-down"></b></a>
                                    <div class="dropdown-menu">
                                        <div class="drop-wrap">
                                            <div class="five-col">
                                                <div class="column">
                                                    <strong class="title sub-link-opener">General</strong>
                                                    <ul class="header-link">
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li><a href="error.html">404 Error</a></li>
                                                        <li>
                                                            <a href="tour-detail.html">Tour Detail</a>
                                                        </li>
                                                        <li><a href="megamenu.html">Megamenu</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                    </ul>
                                                </div>
                                                <div class="column">
                                                    <strong class="title sub-link-opener">Layout</strong>
                                                    <ul class="header-link">
                                                        <li>
                                                            <a href="layout-fullwidth.html">Full Width Page</a>
                                                        </li>
                                                        <li>
                                                            <a href="layout-fullwidth-wide.html">Full Width Wide</a>
                                                        </li>
                                                        <li>
                                                            <a href="layout-left-sidebar.html">Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="layout-right-sidebar.html">Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="layout-both-sidebar.html">Both Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="column">
                                                    <strong class="title sub-link-opener">Booking</strong>
                                                    <ul class="header-link">
                                                        <li><a href="login.html">Login/Register</a></li>
                                                        <li>
                                                            <a href="my-wishlist.html">My Wishlist</a>
                                                        </li>
                                                        <li><a href="my-cart.html">My Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li>
                                                            <a href="confirmation.html">Confirmation</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="column">
                                                    <strong class="title sub-link-opener">Header Styles</strong>
                                                    <ul class="header-link">
                                                        <li>
                                                            <a href="header-top-bar.html">Header - Top Bar</a>
                                                        </li>
                                                        <li>
                                                            <a href="header-centered.html">Header - Centered</a>
                                                        </li>
                                                        <li>
                                                            <a href="header-default-white.html">Header - White</a>
                                                        </li>
                                                        <li>
                                                            <a href="header-dark.html">Header - Dark</a>
                                                        </li>
                                                        <li>
                                                            <a href="header-transparent.html">Header - Transparent</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="column">
                                                    <strong class="title sub-link-opener">Misc</strong>
                                                    <ul class="header-link">
                                                        <li><a href="icon-font.html">Icon Fonts</a></li>
                                                        <li>
                                                            <a href="home-boxed.html">Boxed Layout</a>
                                                        </li>
                                                        <li><a href="home-image-bg.html">Image BG</a></li>
                                                        <li>
                                                            <a href="home-pattern-bg.html">Pattern BG</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="icon-angle-down"></b></a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a href="blog-default.html">Blog Default</a></li>
                                            <li>
                                                <a href="blog-left-sidebar.html">Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-right-sidebar.html">Right Sidebar</a>
                                            </li>
                                            <li><a href="blog-fullwidth.html">Full Width</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown has-mega-dropdown mega-md">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Elements <b class="icon-angle-down"></b></a>
                                    <div class="dropdown-menu">
                                        <div class="drop-wrap">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="header-link">
                                                        <li>
                                                            <a href="elements-animations.html">Animations</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-blockquotes.html">Blockquotes</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-buttons.html">Buttons</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-carousel.html">Carousel</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-counters.html">Counters</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-modal-boxes.html">Modal Boxes</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-paginations.html">Paginations</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="header-link">
                                                        <li>
                                                            <a href="elements-columns.html">Columns</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-data-tables.html">Data Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-date-picker.html">Date Pickers</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-dividers.html">Dividers</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-icon-boxes.html">Icon Boxes</a>
                                                        </li>
                                                        <li><a href="icon-font.html">Icon Fonts</a></li>
                                                        <li>
                                                            <a href="elements-accordions.html">Accordions</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="header-link">
                                                        <li>
                                                            <a href="elements-headings.html">Headings</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-galleries.html">Galleries</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-labels-badges.html">Labels/Badges</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-media-option.html">Media Options</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-search-options.html">Search Options</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-social-icons.html">Social Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-responsive.html">Responsive/Visibility</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="visible-xs visible-sm">
                                    <a href="login.html">
                                        <span class="icon icon-user"></span>
                                        <span class="text">Login</span>
                                    </a>
                                </li>
                                <li class="hidden-xs hidden-sm v-divider">
                                    <a href="login.html">
                                        <span class="icon icon-user"></span>
                                    </a>
                                </li>
                                <li class="visible-xs visible-sm nav-visible dropdown last-dropdown v-divider">
                                    <a href="my-cart.html" data-toggle="dropdown">
                                        <span class="icon icon-cart"></span>
                                        <span class="text hidden-md hidden-lg">Cart</span>
                                        <span class="text hidden-xs hidden-sm">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-md">
                                        <div class="drop-wrap cart-wrap">
                                            <strong class="title">Shopping Cart</strong>
                                            <ul class="cart-list">
                                                <li>
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="{{asset('assets/img/listing/img-16.jpg')}}" height="165" width="170" alt="image description" />
                                                        </a>
                                                    </div>
                                                    <div class="text-holder">
                                                        <span class="amount">x 2</span>
                                                        <div class="text-wrap">
                                                            <strong class="name"><a href="#">Weekend in Paradise</a></strong>
                                                            <span class="price">$199</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="{{asset('assets/img/listing/img-17.jpg')}}" height="165" width="170" alt="image description" />
                                                        </a>
                                                    </div>
                                                    <div class="text-holder">
                                                        <span class="amount">x 4</span>
                                                        <div class="text-wrap">
                                                            <strong class="name"><a href="#">Water Sports in Spain</a></strong>
                                                            <span class="price">$199</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="{{asset('assets/img/listing/img-18.jpg')}}" height="165" width="170" alt="image description" />
                                                        </a>
                                                    </div>
                                                    <div class="text-holder">
                                                        <span class="amount">x 4</span>
                                                        <div class="text-wrap">
                                                            <strong class="name"><a href="#">Beach Party in Greece</a></strong>
                                                            <span class="price">$199</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="footer">
                                                <a href="my-cart.html" class="btn btn-primary">View cart</a>
                                                <span class="total">$3300</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown hidden-xs hidden-sm last-dropdown v-divider">
                                    <a href="#"><span class="text">EN</span>
                                        <span class="icon-angle-down"></span></a>
                                    <div class="dropdown-menu dropdown-sm">
                                        <div class="drop-wrap lang-wrap">
                                            <div class="lang-row">
                                                <div class="lang-col">
                                                    <a href="#">
                                                        <span class="text">English</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="lang-row">
                                                <div class="lang-col">
                                                    <a href="#">
                                                        <span class="text">German</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="lang-row">
                                                <div class="lang-col">
                                                    <a href="#">
                                                        <span class="text">Russian</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="lang-row">
                                                <div class="lang-col">
                                                    <a href="#">
                                                        <span class="text">Czech</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="lang-row">
                                                <div class="lang-col">
                                                    <a href="#">
                                                        <span class="text">Chinese</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="lang-row">
                                                <div class="lang-col">
                                                    <a href="#">
                                                        <span class="text">Danish</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="visible-md visible-lg nav-visible v-divider">
                                    <a href="#" class="search-opener"><span class="icon icon-search"></span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- search form -->
                <form class="search-form" action="#">
                    <fieldset>
                        <a href="#" class="search-opener hidden-md hidden-lg">
                            <span class="icon-search"></span>
                        </a>
                        <div class="search-wrap">
                            <a href="#" class="search-opener close">
                                <span class="icon-cross"></span>
                            </a>
                            <div class="trip-form trip-form-v2 trip-search-main">
                                <div class="trip-form-wrap">
                                    <div class="holder">
                                        <label>Departing</label>
                                        <div class="select-holder">
                                            <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" readonly />
                                                <span class="input-group-addon"><i class="icon-drop"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label>Returning</label>
                                        <div class="select-holder">
                                            <div id="datepicker1" class="input-group date" data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" readonly />
                                                <span class="input-group-addon"><i class="icon-drop"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label for="select-region">Select Region</label>
                                        <div class="select-holder">
                                            <select class="trip-select trip-select-v2 region" name="region" id="select-region">
                                                <option value="select">Africa</option>
                                                <option value="select">Arctic</option>
                                                <option value="select">Asia</option>
                                                <option value="select">Europe</option>
                                                <option value="select">Oceanaia</option>
                                                <option value="select">Polar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label for="select-activity">Select Activity</label>
                                        <div class="select-holder">
                                            <select class="trip-select trip-select-v2 acitvity" name="activity" id="select-activity">
                                                <option value="Holiday Type">Holiday Type</option>
                                                <option value="Holiday Type">Beach Holidays</option>
                                                <option value="Holiday Type">Weekend Trips</option>
                                                <option value="Holiday Type">Summer and Sun</option>
                                                <option value="Holiday Type">Water Sports</option>
                                                <option value="Holiday Type">Scuba Diving</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label for="price-range">Price Range</label>
                                        <div class="select-holder">
                                            <select class="trip-select trip-select-v2 price" name="activity" id="price-range">
                                                <option value="Price Range">Price Range</option>
                                                <option value="Price Range">$1 - $499</option>
                                                <option value="Price Range">$500 - $999</option>
                                                <option value="Price Range">$1000 - $1499</option>
                                                <option value="Price Range">$1500 - $2999</option>
                                                <option value="Price Range">$3000+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <button class="btn btn-trip btn-trip-v2" type="submit">
                                            Find Tours
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </header>
            <!-- main banner -->
            <div class="banner banner-home">
                <!-- revolution slider starts -->
                <div id="rev_slider_279_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="restaurant-header" 
                style="
                    margin: 0px auto;
                    background-color: #474d4b;
                    padding: 0px;
                    margin-top: 0px;
                    margin-bottom: 0px;
                  ">
                    <div id="rev_slider_70_1" class="rev_slider fullscreenabanner" style="display: none" data-version="5.1.4">
                        <ul>
                            <li class="slider-color-schema-dark" data-index="rs-2" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                                <!-- main image for revolution slider -->

                                <div class="tp-caption tp-resizeme" id="slide-897-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['160','120','-120','-70']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="
                                    z-index: 9;
                                    white-space: nowrap;
                                    font-size: 60px;
                                    line-height: 100px;
                                    text-align: center;
                                    ">
                                    <span class="icon-wildlife"></span>
                                </div>

                                <div class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['280','240','10','20']" data-fontsize="['48','48','44','28']" data-lineheight="['85','85','50','50']" data-width="['1200','1000','750','480']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="
                                    z-index: 7;
                                    letter-spacing: 0;
                                    font-weight: 100;
                                    text-align: center;
                                    color: #ffffff;
                                    ">
                                    EXPEDITION OF UNEXPLORED
                                </div>

                                <div class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-10" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['340','290','70','70']" data-fontsize="['60','60','60','40']" data-lineheight="['110','110','100','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="
                                    z-index: 8;
                                    padding-right: 10px;
                                    text-indent: 5px;
                                    font-weight: 900;
                                    white-space: nowrap;
                                    ">
                                    TERRITORY
                                </div>

                                <div class="tp-caption rev-btn rs-parallaxlevel-10" id="slide-163-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','160','180','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="1250" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]' data-responsive_offset="on">
                                    <a class="btn btn-banner" href="#">PURCHASE</a>
                                </div>
                            </li>

                            <li data-index="rs-81" data-transition="slideoverup" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="The Menu" data-description="">
                                <!-- main image for revolution slide -->
                                <img alt="image description" src="{{asset('assets/img/banner/img-01.jpg')}}" data-lazyload="{{asset('assets/img/banner/img-02.jpg')}}" data-bgposition="right center" data-kenburns="on" data-duration="30000" data-ease="Power1.easeOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina />

                                <div class="tp-caption tp-resizeme" id="slide-897-layer1-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['160','120','-120','-70']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="
                                    z-index: 9;
                                    white-space: nowrap;
                                    font-size: 60px;
                                    line-height: 100px;
                                    text-align: center;
                                    ">
                                    <span class="icon-hiking-camping"></span>
                                </div>

                                <div class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['280','240','10','20']" data-fontsize="['48','48','44','28']" data-lineheight="['85','85','50','50']" data-width="['1200','1000','750','480']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="
                                    z-index: 7;
                                    letter-spacing: 0;
                                    font-weight: 100;
                                    text-align: center;
                                    color: #ffffff;
                                    ">
                                    ADEVENTURE TOUR TEMPLATE
                                </div>

         

                                <div class="tp-caption tp-resizeme banner-heading-sub rs-parallaxlevel-10" data-x="['center','center','center','center']" data-hoffset="['30','30','30','20']" data-y="['top','top','middle','middle']" data-voffset="['330','280','60','60']" data-fontsize="['60','60','60','40']" data-lineheight="['110','110','100','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="
                                z-index: 8;
                                padding-right: 10px;
                                text-indent: 5px;
                                font-weight: 900;
                                white-space: nowrap;
                                ">
                                    2016
                                </div>

                                <div class="tp-caption rev-btn rs-parallaxlevel-10" id="slide-163-layer1-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','160','180','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]' data-responsive_offset="on">
                                    <a class="btn btn-banner" href="#">PURCHASE</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="feature-block">
                    <div class="holder">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <span class="icon-bungee"></span>
                                    </span>
                                    <span class="info">Bungee Jump</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <span class="icon-hiking"></span>
                                    </span>
                                    <span class="info">Hiking Trips</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <span class="icon-wildlife"></span>
                                    </span>
                                    <span class="info">Wildlife Safari</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <span class="icon-peak-climbing"></span>
                                    </span>
                                    <span class="info">Peak Climbing</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <span class="icon-mountain-biking"></span>
                                    </span>
                                    <span class="info">Mount Biking</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <span class="icon-scuba-diving"></span>
                                    </span>
                                    <span class="info">Scuba Diving</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <span class="icon-hunting"></span>
                                    </span>
                                    <span class="info">Hunting Trip</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <span class="icon-boating"></span>
                                    </span>
                                    <span class="info">Sailing Trips</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @yield('content')

        </div>
        <!-- main footer -->
        <footer id="footer">
            <div class="container">
                <!-- newsletter form -->
                <form action="https://html.waituk.com/entrada/php/subscribe.html" id="signup" method="post" class="newsletter-form">
                    <fieldset>
                        <div class="input-holder">
                            <input type="email" class="form-control" placeholder="Email Address" name="subscriber_email" id="subscriber_email" />
                            <input type="submit" value="GO" />
                        </div>
                        <span class="info" id="subscribe_message">To receive news, updates and tour packages via email.</span>
                    </fieldset>
                </form>
                <!-- footer links -->
                <div class="row footer-holder">
                    <nav class="col-sm-4 col-lg-2 footer-nav active">
                        <h3>About Entrada</h3>
                        <ul class="slide">
                            <li><a href="#">The Company</a></li>
                            <li><a href="#">Our Values</a></li>
                            <li><a href="#">Responsiblity</a></li>
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Opportunity</a></li>
                            <li><a href="#">Safety Concerns</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav">
                        <h3>Destinations</h3>
                        <ul class="slide">
                            <li><a href="#">Nepal</a></li>
                            <li><a href="#">Thailand</a></li>
                            <li><a href="#">Vietnam</a></li>
                            <li><a href="#">Fiji Island</a></li>
                            <li><a href="#">United States</a></li>
                            <li><a href="#">Australia</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav">
                        <h3>themes</h3>
                        <ul class="slide">
                            <li><a href="#">Hiking and Camping</a></li>
                            <li><a href="#">Trekking Tours</a></li>
                            <li><a href="#">Jungle Safaris</a></li>
                            <li><a href="#">Bungee Jumping</a></li>
                            <li><a href="#">Wildlife &amp; Polar</a></li>
                            <li><a href="#">Peak Climbing</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav">
                        <h3>reservation</h3>
                        <ul class="slide">
                            <li><a href="#">Booking Conditions</a></li>
                            <li><a href="#">My Bookings</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Includes &amp; Excludes</a></li>
                            <li><a href="#">Your Responsibilities</a></li>
                            <li><a href="#">Order a Brochure</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav">
                        <h3>ask Entrada</h3>
                        <ul class="slide">
                            <li><a href="#">Why Entrada?</a></li>
                            <li><a href="#">Ask an Expert</a></li>
                            <li><a href="#">Safety Updates</a></li>
                            <li><a href="#">We Help When...</a></li>
                            <li><a href="#">Personal Matters</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav last">
                        <h3>contact Entrada</h3>
                        <ul class="slide address-block">
                            <li class="wrap-text">
                                <span class="icon-tel"></span>
                                <a href="tel:02072077878">(020) 72077878</a>
                            </li>
                            <li class="wrap-text">
                                <span class="icon-fax"></span>
                                <a href="tel:02088828282">(020) 88828282</a>
                            </li>
                            <li class="wrap-text">
                                <span class="icon-email"></span>
                                <a href="mailto:info@entrada.com">info@entrada.com</a>
                            </li>
                            <li>
                                <span class="icon-home"></span>
                                <address>707 London Road Isleworth, Middx TW7 7QD</address>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- social wrap -->
                <ul class="social-wrap">
                    <li class="facebook">
                        <a href="#">
                            <span class="icon-facebook"></span>
                            <strong class="txt">Like Us</strong>
                        </a>
                    </li>
                    <li class="twitter">
                        <a href="#">
                            <span class="icon-twitter"></span>
                            <strong class="txt">Follow On</strong>
                        </a>
                    </li>
                    <li class="google-plus">
                        <a href="#">
                            <span class="icon-google-plus"></span>
                            <strong class="txt">+1 On Google</strong>
                        </a>
                    </li>
                    <li class="vimeo">
                        <a href="#">
                            <span class="icon-vimeo"></span>
                            <strong class="txt">Share At</strong>
                        </a>
                    </li>
                    <li class="pin">
                        <a href="#">
                            <span class="icon-pin"></span>
                            <strong class="txt">Pin It</strong>
                        </a>
                    </li>
                    <li class="dribble">
                        <a href="#">
                            <span class="icon-dribble"></span>
                            <strong class="txt">Dribbble</strong>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- copyright -->
                            <strong class="copyright"><i class="fa fa-copyright"></i> Copyright 2016 - Entrada - An
                                Adventure Theme - by <a href="#">Waituk</a></strong>
                        </div>
                        <div class="col-lg-6">
                            <ul class="payment-option">
                                <li>
                                    <img src="{{asset('assets/img/footer/visa.png')}}" alt="visa" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/img/footer/mastercard.png')}}" height="20" width="33" alt="master card" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/img/footer/paypal.png')}}" height="20" width="72" alt="paypal" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/img/footer/maestro.png')}}" height="20" width="33" alt="maestro" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/img/footer/bank-transfer.png')}}" height="20" width="55" alt="bank transfer" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- scroll to top -->
    <div class="scroll-holder text-center">
        <a href="javascript:" id="scroll-to-top"><i class="icon-arrow-down"></i></a>
    </div>
    <!-- jquery library -->
    <script src="{{asset('assets/vendors/jquery/jquery-2.1.4.min.js')}}"></script>
    <!-- external scripts -->
    <script src="{{asset('assets/vendors/bootstrap/javascripts/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-placeholder/jquery.placeholder.min.js')}}"></script>
    <script src="{{asset('assets/vendors/match-height/jquery.matchHeight.js')}}"></script>
    <script src="{{asset('assets/vendors/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/vendors/stellar/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assets/vendors/validate/jquery.validate.js')}}"></script>
    <script src="{{asset('assets/vendors/waypoint/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/vendors/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{asset('assets/vendors/fancybox/jquery.fancybox.js')}}"></script>
    <script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jcf/js/jcf.js')}}"></script>
    <script src="{{asset('assets/vendors/jcf/js/jcf.select.js')}}"></script>
    <script src="{{asset('assets/js/mailchimp.js')}}"></script>
    <script src="{{asset('assets/vendors/retina/retina.min.js')}}"></script>
    <script src="{{asset('assets/vendors/sticky-kit/sticky-kit.js')}}"></script>
    <script src="{{asset('assets/js/sticky-kit-init.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js')}}"></script>
    <!-- custom jquery script -->
    <script src="{{asset('assets/js/jquery.main.js')}}"></script>
    <!-- revolution slider plugin -->
    <script type="text/javascript" src="{{asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- rs5.0 core files -->
    <script type="text/javascript" src="{{asset('assets/vendors/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <!-- revolutions slider script -->
    <script src="{{asset('assets/js/revolution.js')}}"></script>
</body>

<!-- Mirrored from html.waituk.com/entrada/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Oct 2021 08:08:11 GMT -->

</html>