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
            @foreach($pacote as $p)
            <li>
                <a class="fancybox" data-fancybox-group="group" href="assets/images/pacote/icon/{{$p->icon}}" title="{{$p->titulo}}">
                    <span class="img-holder">
                        <img src="assets/images/pacote/icon/{{$p->icon}}" height="240" width="370" alt="image description" />
                    </span>
                    <span class="caption">
                        <span class="centered">
                            <strong class="title">{{$p->titulo}}</strong>
                            <span class="sub-text">{{$p->titulo}} -  {{$p->subtitulo}}</span>
                        </span>
                    </span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</main>
</div>

@endsection