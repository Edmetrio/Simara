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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

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
                                        @foreach($servico as $p)
                                            <li><a href="{{ route('servicoinfo.show',$p->id)}}">{{$p->titulo}}</a></li>
                                        @endforeach
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
                                                @foreach($ultimo as $u)
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="col">
                                                            <div class="img-wrap">
                                                            <a href="{{ route('galeria.index')}}"><img src="../assets/images/post/icon/{{$u->icon}}" height="228" width="350" alt="Simara" /></a>
                                                                <!-- <a href="{{ route('galeria.index')}}"><img src="assets/images/post/icon/{{$u->icon}}" height="228" width="350" alt="Simara" /></a> -->
                                                            </div>
                                                            <div class="des">
                                                                <strong class="title"><a href="{{ route('galeria.index')}}">{{$u->titulo}}</a></strong>
                                                                <p>
                                                                    {{$u->descricao}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('sobre.index')}}">Sobre nós</a></li>
                                <li><a href="{{ route('agenda.index')}}">Agendar</a></li>
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
                                        <label>Partida</label>
                                        <div class="select-holder">
                                            <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" readonly />
                                                <span class="input-group-addon"><i class="icon-drop"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label>Retorno</label>
                                        <div class="select-holder">
                                            <div id="datepicker1" class="input-group date" data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" readonly />
                                                <span class="input-group-addon"><i class="icon-drop"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label for="select-region">Seleccione a Região</label>
                                        <div class="select-holder">
                                            <select class="trip-select trip-select-v2 region" name="region" id="select-region">
                                                <option value="select">África</option>
                                                <option value="select">Ártica</option>
                                                <option value="select">Ásia</option>
                                                <option value="select">Europa</option>
                                                <option value="select">Oceânia</option>
                                                <option value="select">Polar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label for="select-activity">SELECCIONE ACTIVIDADE</label>
                                        <div class="select-holder">
                                            <select class="trip-select trip-select-v2 acitvity" name="activity" id="select-activity">
                                                <option value="Holiday Type">Tipo de Férias</option>
                                                <option value="Holiday Type">Férias na Praia</option>
                                                <option value="Holiday Type">Viagens de fim de semana</option>
                                                <option value="Holiday Type">Verão e sol</option>
                                                <option value="Holiday Type">Esportes Aquáticos</option>
                                                <option value="Holiday Type">Mergulho</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label for="price-range">FAIXA DE PREÇO</label>
                                        <div class="select-holder">
                                            <select class="trip-select trip-select-v2 price" name="activity" id="price-range">
                                                <option value="Price Range">FAIXA DE PREÇO</option>
                                                <option value="Price Range">1.000,00MT - 10.000,00MT</option>
                                                <option value="Price Range">11.000,00MT - 50.000,00MT</option>
                                                <option value="Price Range">60.000,00MT - 100.000,00MT</option>
                                                <option value="Price Range">100.000,00MT - 1.000.000,00MT</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <button class="btn btn-trip btn-trip-v2" type="submit">
                                            Procurar
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