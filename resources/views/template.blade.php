<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simara</title>
    <!-- favion -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/logos/logo.png')}}" />
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>
    <div class="preloader" id="pageLoad">
        <div class="holder">
            <img class="normal" src="{{asset('assets/img/logos/logo.png')}}" alt="Simara" />
        </div>
    </div>
    <!-- main wrapper -->
    <div id="wrapper">
        <div class="page-wrapper">
            <!-- main header -->
            <header id="header" class="white-header">
                <div class="container-fluid">
                    <!-- logo -->
                    <div class="logo">
                        <a href="{{ route ('inicio.index')}}">
                            <img class="normal" src="{{asset('assets/img/logos/logo.png')}}" alt="Simara" />
                            <img class="gray-logo" src="{{asset('assets/img/logos/logo.png')}}" alt="Simara" />
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
                                <li><a href="{{ route('inicio.index')}}">Início</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Serviços <b class="icon-angle-down"></b></a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a href="#">Viagens</a></li>
                                            <li>
                                                <a href="#">Rent-a-Car</a>
                                            </li>
                                            <li>
                                                <a href="#">Excuesões</a>
                                            </li>
                                            <li>
                                                <a href="#">Guia Turística</a>
                                            </li>
                                            <li>
                                                <a href="#">Passagens Aéreas</a>
                                            </li>
                                            <li>
                                                <a href="#">Seguros de Viagens</a>
                                            </li>
                                            <li>
                                                <a href="#">Reservas de Hotéis</a>
                                            </li>
                                            <li>
                                                <a href="#">Organizações de Seminários</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{ route('galeria.index')}}">Galeria</a></li>
                                <li class="dropdown has-mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ultímos Postes <b class="icon-angle-down"></b></a>
                                    <div class="dropdown-menu">
                                        <div class="drop-wrap">
                                            <div class="drop-holder">
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="col">
                                                            <div class="img-wrap">
                                                                <a href="{{ route('galeria.index')}}"><img src="{{asset('assets/img/post/sida.jpeg')}}" height="228" width="350" alt="image description" /></a>
                                                            </div>
                                                            <div class="des">
                                                                <strong class="title"><a href="{{ route('galeria.index')}}">Dia Mundial de HIV</a></strong>
                                                                <p>
                                                                    O Dia Mundial de Combate à AIDS ou Dia Mundial de Luta Contra a SIDA,
                                                                    internacionalmente definido como o dia 1° de dezembro, é uma data voltada
                                                                    para que o mundo una
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="col">
                                                            <div class="img-wrap">
                                                                <a href="{{ route('galeria.index')}}"><img src="{{asset('assets/img/post/reserva.jpeg')}}" height="215" width="370" alt="image description" /></a>
                                                            </div>
                                                            <div class="des">
                                                                <strong class="title"><a href="{{ route('galeria.index')}}">Reserva de Maputo</a></strong>
                                                                <p>
                                                                    A Reserva de Elefantes de Maputo, oficialmente Reserva Especial de Maputo,
                                                                    é uma área de conservação localizada no extremo sul de Moçambique, no distrito
                                                                    de Matutuíne
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="col">
                                                            <div class="img-wrap">
                                                                <a href="{{ route('galeria.index')}}"><img src="{{asset('assets/img/post/africa.jpeg')}}" height="215" width="370" alt="image description" /></a>
                                                            </div>
                                                            <div class="des">
                                                                <strong class="title"><a href="{{ route('galeria.index')}}">África do Sul</a></strong>
                                                                <p>
                                                                    África do Sul é um país seguro para viajar, inclusive para mulheres.
                                                                    Os crimes contra turistas são raros e, na maioria das vezes, limitam-se
                                                                    a furtos.
                                                                    SOBRE NÓS
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="col">
                                                            <div class="img-wrap">
                                                                <a href="{{ route('galeria.index')}}"><img src="{{asset('assets/img/post/sida.jpeg')}}" height="228" width="350" alt="image description" /></a>
                                                            </div>
                                                            <div class="des">
                                                                <strong class="title"><a href="{{ route('galeria.index')}}">Dia Mundial de HIV</a></strong>
                                                                <p>
                                                                    O Dia Mundial de Combate à AIDS ou Dia Mundial de Luta Contra a SIDA,
                                                                    internacionalmente definido como o dia 1° de dezembro, é uma data voltada
                                                                    para que o mundo una
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('sobre.index')}}">Sobre nós</a></li>
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
                <div id="rev_slider_279_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="restaurant-header" style="
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
                                <img alt="image description" src="{{asset('assets/img/slider/img-03.jpg')}}" data-lazyload="{{('assets/img/slider/img-03.jpg')}}" data-bgposition="right center" data-kenburns="on" data-duration="30000" data-ease="Power1.easeOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina />

                                <div class="tp-caption tp-resizeme" id="slide-897-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['160','120','-120','-70']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="
                                    z-index: 9;
                                    white-space: nowrap;
                                    font-size: 60px;
                                    line-height: 100px;
                                    text-align: center;
                                    ">
                                    <img width="80%" height="80%" src="{{asset('assets/img/botao/4.png')}}" alt="image description" />
                                </div>

                                <div class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['280','240','10','20']" data-fontsize="['48','48','44','28']" data-lineheight="['85','85','50','50']" data-width="['1200','1000','750','480']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="
                                    z-index: 7;
                                    letter-spacing: 0;
                                    font-weight: 100;
                                    text-align: center;
                                    color: #ffffff;
                                    ">
                                    Explore o Mundo
                                </div>

                                <div class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-10" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['340','290','70','70']" data-fontsize="['60','60','60','40']" data-lineheight="['110','110','100','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="
                                    z-index: 8;
                                    padding-right: 10px;
                                    text-indent: 5px;
                                    font-weight: 900;
                                    white-space: nowrap;
                                    ">
                                    SAFARI
                                </div>

                                <div class="tp-caption rev-btn rs-parallaxlevel-10" id="slide-163-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','160','180','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="1250" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]' data-responsive_offset="on">
                                    <a class="btn btn-banner" href="#">SAIBA MAIS</a>
                                </div>
                            </li>

                            <li data-index="rs-81" data-transition="slideoverup" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="The Menu" data-description="">
                                <!-- main image for revolution slide -->
                                <img alt="image description" src="{{asset('assets/img/slider/img-01.jpg')}}" data-lazyload="{{('assets/img/slider/img-01.jpg')}}" data-bgposition="right center" data-kenburns="on" data-duration="30000" data-ease="Power1.easeOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina />

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
                                    EXPLORE OS OCEANOS
                                </div>



                                <div class="tp-caption tp-resizeme banner-heading-sub rs-parallaxlevel-10" data-x="['center','center','center','center']" data-hoffset="['30','30','30','20']" data-y="['top','top','middle','middle']" data-voffset="['330','280','60','60']" data-fontsize="['60','60','60','40']" data-lineheight="['110','110','100','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="
                                z-index: 8;
                                padding-right: 10px;
                                text-indent: 5px;
                                font-weight: 900;
                                white-space: nowrap;
                                ">
                                    CRUSEIRO
                                </div>

                                <div class="tp-caption rev-btn rs-parallaxlevel-10" id="slide-163-layer1-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','160','180','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]' data-responsive_offset="on">
                                    <a class="btn btn-banner" href="#">SAIBA MAIS</a>
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
                                        <img width="80%" height="80%" src="{{asset('assets/img/botao/1.png')}}" alt="image description" />
                                    </span>
                                    <span class="info">Viagens Nacionais</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <img width="80%" height="80%" src="{{asset('assets/img/botao/2.png')}}" alt="image description" />
                                    </span>
                                    <span class="info">Viagens</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <img width="80%" height="80%" src="{{asset('assets/img/botao/3.png')}}" alt="image description" />
                                    </span>
                                    <span class="info">Cruseiro</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <img width="80%" height="80%" src="{{asset('assets/img/botao/4.png')}}" alt="image description" />
                                    </span>
                                    <span class="info">Safari</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <img width="80%" height="80%" src="{{asset('assets/img/botao/5.png')}}" alt="image description" />
                                    </span>
                                    <span class="info">Passeios</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <img width="80%" height="80%" src="{{asset('assets/img/botao/6.png')}}" alt="image description" />
                                    </span>
                                    <span class="info">Passagens</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <img width="80%" height="80%" src="{{asset('assets/img/botao/4.png')}}" alt="image description" />
                                    </span>
                                    <span class="info">Safari</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ico">
                                        <img width="80%" height="80%" src="{{asset('assets/img/botao/2.png')}}" alt="image description" />
                                    </span>
                                    <span class="info">Viagens</span>
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
                <div class="row footer-holder">
                    <nav class="col-sm-4 col-lg-3 footer-nav active">
                        <h3>Sobre nós</h3>
                        <ul class="slide">
                            <li><a href="{{ route('inicio.index')}}">A Simara</a></li>
                            <li><a href="{{ route('sobre.index')}}">Modelo</a></li>
                            <li><a href="{{ route('sobre.index')}}">Visão</a></li>
                            <li><a href="{{ route('sobre.index')}}">Missão</a></li>
                            <li><a href="{{ route('galeria.index')}}">Galeria</a></li>
                            <li><a href="#">Serviços</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-3 footer-nav">
                        <h3>Serviços</h3>
                        <ul class="slide">
                            <li><a href="#">Viagens</a></li>
                            <li><a href="#">Rent-a-Car</a></li>
                            <li><a href="#">Excuesões</a></li>
                            <li><a href="#">Guia Turística</a></li>
                            <li><a href="#">Passagens Aéreas</a></li>
                            <li><a href="#">Seguros de Viagens</a></li>
                            <li><a href="#">Reservas de Hotéis</a></li>
                            <li><a href="#">Organizações de Seminários</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-3 footer-nav">
                        <h3>Destinos</h3>
                        <ul class="slide">
                            <li><a href="#">Índia</a></li>
                            <li><a href="#">Instabul - Turquia</a></li>
                            <li><a href="#">Lisboa - Portugal</a></li>
                            <li><a href="#">Doha - Catar</a></li>
                            <li><a href="#">Brasil</a></li>
                            <li><a href="#">Tailãndia</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav last">
                        <h3>Contacte-nos</h3>
                        <ul class="slide address-block">
                            <li class="wrap-text">
                                <span class="icon-tel"></span>
                                <a href="tel:+258820046681">+258 82 004 6681</a>
                            </li>
                            <li class="wrap-text">
                                <span class="icon-fax"></span>
                                <a href="tel:+258820046683">+258 82 004 6683</a>
                            </li>
                            <li class="wrap-text">
                                <span class="icon-email"></span>
                                <a href="mailto:info@entrada.com">info@simaratours</a>
                            </li>
                            <li>
                                <span class="icon-home"></span>
                                <address>1.249 Maputo-Moçambique, Av. 24 de Julho</address>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- copyright -->
                            <strong class="copyright"><i class="fa fa-copyright"></i> Copyright 2021 - Simara
                                - Pela <a href="http://firsteducation.edu.mz/">FirstTech</a></strong>
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