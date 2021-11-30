@extends('templates')

@section('content')

<!-- main container-->
<main id="main">
    <!-- top information area -->
    <div class="inner-top">
        <div class="container">
            <h1 class="inner-main-heading">Galerias - Postes</h1>
            <!-- breadcrumb -->
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Galeria</a></li>
                    <li><span>Postes</span></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="inner-main common-spacing container">
        <ul class="gallery-list has-center gallery-main">
            <li>
                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-10-2.jpg" title="Caption Goes Here">
                    <span class="img-holder">
                        <img src="{{asset('assets/img/post/africa.jpeg')}}" height="750" width="450" alt="image description" />
                    </span>
                    <span class="caption">
                        <span class="centered">
                            <strong class="title">África do Sul</strong>
                            <span class="sub-text">Vamos viajar a África do Sul</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-11-2.jpg" title="Caption Goes Here">
                    <span class="img-holder">
                        <img src="{{asset('assets/img/post/reserva.jpeg')}}" height="240" width="370" alt="image description" />
                    </span>
                    <span class="caption">
                        <span class="centered">
                            <strong class="title">Reserva de Maputo</strong>
                            <span class="sub-text">Explore as reservas de Maputo</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-12-2.jpg" title="Caption Goes Here">
                    <span class="img-holder">
                        <img src="{{asset('assets/img/post/sida.jpeg')}}" height="240" width="370" alt="image description" />
                    </span>
                    <span class="caption">
                        <span class="centered">
                            <strong class="title">Dia Mundial de HIV</strong>
                            <span class="sub-text">1 de Dezembro -  Dia Mundial de HIV</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-13-2.jpg" title="Caption Goes Here">
                    <span class="img-holder">
                        <img src="{{asset('assets/img/post/africa.jpeg')}}" height="240" width="370" alt="image description" />
                    </span>
                    <span class="caption">
                        <span class="centered">
                            <strong class="title">África do Sul</strong>
                            <span class="sub-text">Vamos viajar a África do Sul</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-14-2.jpg" title="Caption Goes Here">
                    <span class="img-holder">
                        <img src="{{asset('assets/img/post/sida.jpeg')}}" height="240" width="370" alt="image description" />
                    </span>
                    <span class="caption">
                        <span class="centered">
                            <strong class="title">Dia Mundial de HIV</strong>
                            <span class="sub-text">1 de Dezembro -  Dia Mundial de HIV</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-15-2.jpg" title="Caption Goes Here">
                    <span class="img-holder">
                        <img src="{{asset('assets/img/post/reserva.jpeg')}}" height="240" width="370" alt="image description" />
                    </span>
                    <span class="caption">
                        <span class="centered">
                            <strong class="title">Reserva de Maputo</strong>
                            <span class="sub-text">Explore as reservas de Maputo</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-16-2.jpg" title="Caption Goes Here">
                    <span class="img-holder">
                        <img src="{{asset('assets/img/post/africa.jpeg')}}" height="240" width="370" alt="image description" />
                    </span>
                    <span class="caption">
                        <span class="centered">
                            <strong class="title">África do Sul</strong>
                            <span class="sub-text">Vamos viajar a África do Sul</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-17-2.jpg" title="Caption Goes Here">
                    <span class="img-holder">
                        <img src="{{asset('assets/img/post/reserva.jpeg')}}" height="240" width="370" alt="image description" />
                    </span>
                    <span class="caption">
                        <span class="centered">
                            <strong class="title">Reserva de Maputo</strong>
                            <span class="sub-text">Explore as reservas de Maputo</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-18-2.jpg" title="Caption Goes Here">
                    <span class="img-holder">
                        <img src="{{asset('assets/img/post/sida.jpeg')}}" height="240" width="370" alt="image description" />
                    </span>
                    <span class="caption">
                        <span class="centered">
                            <strong class="title">Dia Mundial de HIV</strong>
                            <span class="sub-text">1 de Dezembro -  Dia Mundial de HIV</span>
                        </span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</main>
</div>

@endsection