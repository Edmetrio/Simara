@extends('templateT')

@section('content')

<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="activity-city-tour">
  <div class="banner-text">
    <div class="center-text text-center">
      <div class="container">
        <h1>{{$servic->titulo}}</h1>
        <strong class="subtitle">{{$servic->subtitulo}}</strong>
        <nav class="breadcrumbs">
          <ul>
            <li><a href="{{ route('inicio.index')}}">HOME</a></li>
            <li><span>SERVIÇOS</span></li>
            <li><span>{{$servic->titulo}}</span></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>

<main id="main">
  <div class="content-intro">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-9 text-holder">
          <h2 class="main-heading">{{$servic->titulo}}</h2>
          <hr>
          <p>
            {{$servic->subtitulo}}.
          </p>
          <p>
            {{$servic->descricao}}.
          </p>
          <p>
            {{$servic->texto}}.
          </p>
          <div class="btn-holder">
            <a href="#" class="btn btn-info-sub btn-md btn-shadow radius">AGENDE</a>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 map-col">
          <div class="holder">
            <div class="map-holder">
              <img src="../assets/images/icon/{{$servic->icon}}" height="300" width="200" alt="{{$servic->titulo}}" />
            </div>
            <div class="info">
              <div class="slot">
                <strong>Serviço:</strong>
                <span class="sub">{{ $servic->titulo }}</span>
              </div>
              <div class="slot">
                <strong>Descrição:</strong>
                <span class="sub">{{ $servic->titulo }}, {{ $servic->descricao }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @if(!$servinfo->posts->isEmpty())
    <aside class="recent-block recent-gray recent-wide-thumbnail">
      <div class="container">
        <h2 class="text-center text-uppercase">ÚLTIMAS PUBLICAÇÕES</h2>
        <div class="row">
          @foreach($servinfo->posts as $p)
          <article class="col-sm-6 col-md-3 article">
            <div class="thumbnail">
              <h3 class="no-space">
                <a href="../assets/images/post/icon/{{$p->icon}}">{{$p->titulo}}</a>
              </h3>
              <strong class="info-title">{{$p->subtitulo}}</strong>
              <div class="img-wrap">
                <a href="../assets/images/post/icon/{{$p->icon}}">
                  <img src="../assets/images/post/icon/{{$p->icon}}" height="210" width="250" alt="image description" />
                </a>
              </div>
            </div>
          </article>
          @endforeach
        </div>
      </div>
    </aside>
    @else
    @endif

    @if(!$servinfo->pacotes->isEmpty())
    <aside class="recent-block recent-gray recent-wide-thumbnail">
      <div class="container">
        <h2 class="text-center text-uppercase">PACOTES E PREÇOS</h2>
        <div class="row">
          @foreach($servinfo->pacotes as $p)
          <article class="col-sm-6 col-md-3 article">
            <div class="thumbnail">
              <h3 class="no-space">
                <a href="../assets/images/pacote/icon/{{$p->icon}}">{{$p->titulo}}</a>
              </h3>
              <strong class="info-title">{{$p->subtitulo}}</strong>
              <div class="img-wrap">
                <img src="../assets/images/pacote/icon/{{$p->icon}}" height="210" width="250" alt="image description" />
              </div>
              <footer>
                <ul class="social-networks">
                  <li>
                    <a href="https://www.facebook.com/simara.tours/"><span class="icon-facebook"></span></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/simaratours/"><i class="fab fa-instagram fa-lg"></i></a>
                  </li>
                </ul>
              </footer>
            </div>
          </article>
          @endforeach
        </div>
      </div>
    </aside>
    @else
    @endif
    
  </div>

</main>

@endsection