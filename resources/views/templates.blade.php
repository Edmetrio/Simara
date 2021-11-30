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
    <!-- link to custom icomoon fonts -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fonts/icomoon/icomoon.css')}}" />
    <!-- link to wow js animation -->
    <link media="all" rel="stylesheet" href="{{asset('assets/vendors/animate/animate.css')}}" />
    <!-- include bootstrap css -->
    <link media="all" rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" />
    <!-- include fancybox css -->
    <link media="all" rel="stylesheet" href="{{asset('assets/vendors/fancybox/jquery.fancybox.css')}}" />
    <!-- include main css -->
    <link media="all" rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
</head>

<body class="default-page">
    <div class="preloader" id="pageLoad">
        <div class="holder">
            <img class="normal" src="{{asset('assets/img/logos/logo.png')}}" alt="Simara" />
        </div>
    </div>
    <!-- main wrapper -->
    <div id="wrapper">
        <div class="page-wrapper">
            <!-- main header -->
            <header id="header">
                <div class="container-fluid">
                    <!-- logo -->
                    <div class="logo">
                        <a href="{{ route('inicio.index')}}">
                            <img class="normal" src="{{asset('assets/img/logos/logo.png')}}" alt="Simara" />
                            <img class="gray-logo" src="{{asset('assets/img/logos/logo.png')}}" alt="Simara" />
                        </a>
                    </div>
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
                                    <a href="#">
                                        <span class="icon icon-user"></span>
                                        <span class="text">Login</span>
                                    </a>
                                </li>
                                <li class="hidden-xs hidden-sm v-divider">
                                    <a href="#">
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

            @yield('content')

        </div>

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