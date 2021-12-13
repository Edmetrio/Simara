@extends('templates')

@section('content')

<section
          class="banner banner-inner parallax"
          data-stellar-background-ratio="0.5"
          id="activity-city-tour"
        >
          <div class="banner-text">
            <div class="center-text text-center">
              <div class="container">
                <h1>{{$servic->titulo}}</h1>
                <strong class="subtitle"
                  >{{$servic->subtitulo}}</strong
                >
                <!-- breadcrumb -->
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
                  <h2 class="title-heading">{{$servic->titulo}}</h2>
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
                    <a
                      href="#"
                      class="btn btn-info-sub btn-md btn-shadow radius"
                      >AGENDE</a
                    >
                  </div>
                </div>
                <div class="col-sm-4 col-md-3 map-col">
                  <div class="holder">
                    <div class="map-holder">
                      <img
                        src="../assets/images/icon/{{$servic->icon}}"
                        height="300"
                        width="200"
                        alt="image description"
                      />
                    </div>
                    <div class="info">
                      <div class="slot">
                        <strong>Best Season:</strong>
                        <span class="sub">May, June, July, August</span>
                      </div>
                      <div class="slot">
                        <strong>Popular Location:</strong>
                        <span class="sub">Madrid, Bhamas, Phuket, Sydney</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
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
                      <img
                        src="../assets/images/post/icon/{{$p->icon}}"
                        height="210"
                        width="250"
                        alt="image description"
                      />
                    </div>
                    <footer>
                      <p>
                  {{$p->descricao}}.
                  </p>
                    </footer>
                  </div>
                </article>
                @endforeach
              </div>
            </div>
          </aside>

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
                      <img
                        src="../assets/images/pacote/icon/{{$p->icon}}"
                        height="210"
                        width="250"
                        alt="image description"
                      />
                    </div>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                        </li>
                      </ul>
                      <span class="price">A partir de <span>{{$p->preco}}</span></span>
                    </footer>
                  </div>
                </article>
                @endforeach
              </div>
            </div>
          </aside>

          </div>

        </main>

@endsection