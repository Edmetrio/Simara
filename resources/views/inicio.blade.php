@extends('template')

@section('content')

<main id="main">
        <section class="content-block bg-white">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">Nossos Destinos</h2>
              <span class="main-subtitle">Nessa Secção é apresentada os nossos principais destinos ao mundo fora.</span>
              <div class="seperator"></div>
            </header>
            <div class="adventure-holder gallery-home-holder">
              <div class="row">
                <div class="col-md-6 img-block">
                  <!-- gallery list -->
                  <ul class="gallery-list gallery-with-icon">
                    <li>
                      <a href="{{ route('galeria.index')}}" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-01.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-bird"></span>
                        <span class="info">América</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('galeria.index')}}" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-02.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-peak"></span>
                        <span class="info">Terra</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('galeria.index')}}" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-03.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-water"></span>
                        <span class="info">Água</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('galeria.index')}}" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-04.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-asia"></span>
                        <span class="info">Ásia</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('galeria.index')}}" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-05.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-arctic"></span>
                        <span class="info">Europa</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('galeria.index')}}" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-06.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-africa"></span>
                        <span class="info">África</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('galeria.index')}}" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-07.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-plant"></span>
                        <span class="info">Natureza</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('galeria.index')}}" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-08.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-wildlife"></span>
                        <span class="info">Selvagem</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('galeria.index')}}" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-09.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-diamond"></span>
                        <span class="info">Tudo</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6 text-block">
                  <div class="centered">
                    <h2 class="intro-heading">Vivendo uma Vida de Aventura</h2>
                    <p class="intro">
                    Cada viagem é única e transformadora, você sempre irá voltar diferente de quando embarcou. 
                    São experiências capazes de marcar a sua vida e trazer um desejo profundo de conhecer o mundo 
                    cada vez mais. Por isso a A <strong>SIMARA</strong>  disponibiliza algumas exclusividades com vantagens 
                    incríveis para tornar tudo ainda mais especial. Que tal escolher o seu próximo destino?
                    </p>
                    <a href="{{ route('sobre.index')}}" class="btn btn-info-sub btn-md btn-shadow radius">SAIBA MAIS</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- special block -->
        <aside class="special-block">
          <div class="container">
            <p class="special-text">
              Para reservas, contacte-nos
              <strong>Chamada <a href="tel:+258820046681">+258 82 004 6683</a></strong>
            </p>
          </div>
        </aside>
        <!-- article list holder -->
        <div class="content-block content-spacing">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">ÚLTIMAS POSTAGENS</h2>
              <span class="main-subtitle">Confira as últimas actualizações!</span>
              <div class="seperator"></div>
            </header>
            <div class="content-holder">
              <div class="row db-3-col">
            @foreach($post as $p)
                <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                    <a href="assets/images/post/icon/{{$p->icon}}">
                    <img src="assets/images/post/icon/{{$p->icon}}" height="215" width="370" alt="image description" />
                    </a>
                    <div class="img-caption text-uppercase">
                      {{$p->titulo}}
                    </div>
                  </div>
                  <h3><a href="assets/images/post/icon/{{$p->icon}}">{{$p->subtitulo}}</a></h3>
                  <p>
                  {{$p->descricao}}.
                  </p>
                </article>
            @endforeach
              </div>
            </div>
          </div>
        </div>

        <section class="content-block article-boxed">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">SAFARI</h2>
              <span class="main-subtitle">Pacotes e preços dos pontos turísticos</span>
              <div class="seperator"></div>
            </header>
            <div class="content-holder content-boxed">
              <div class="row db-3-col">
            @foreach($pacote as $p)
                <article class="col-sm-6 col-md-4 article has-hover-s1">
                  <div class="thumbnail">
                    <div class="img-wrap">
                      <img src="assets/images/pacote/icon/{{$p->icon}}" height="228" width="350" alt="image description" />
                    </div>
                    <h3 class="small-space">
                      <a href="{{ route('pacote.show',$p->id)}}">{{$p->titulo}}</a>
                    </h3>
                    <span class="info">{{$p->reserva}}</span>
                    <aside class="meta">
                      <span class="country">
                        <span class="icon-world">{{$p->cidade}}</span>
                      </span>
                    </aside>
                    <p>
                    {{$p->descricao}}
                    </p>
                    <a href="{{ route('pacote.show',$p->id)}}" class="btn btn-default">Mais Detalhes</a>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="https://www.facebook.com/simara.tours/"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/simaratours/"><i class="fab fa-instagram fa-lg"></i></a>
                        </li>
                      </ul>
                      <span class="price">A partir de <span>{{$p->preco}},00MT</span></span>
                    </footer>
                  </div>
                </article>
            @endforeach
              </div>
            </div>
          </div>
        </section>
        <div class="testimonial-holder parallax" data-stellar-background-ratio="0.25" id="testimonial-home-page">
          <div class="container">
            <div id="testimonial-home-slide">
            @foreach($depoimento as $d)
              <div class="slide">
                <blockquote class="testimonial-quote">
                  <div class="img">
                    <img src="assets/images/depoimento/icon/{{$d->icon}}" height="112" width="112" alt="image description" />
                  </div>
                  <div class="text">
                    <cite>{{$d->nome}} - {{$d->posicao}}</cite>
                    <q>"{{$d->descricao}}.”</q>
                  </div>
                </blockquote>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <!-- partner list -->
        <article class="partner-block">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">Companhias</h2>
              <span class="main-subtitle">Empresas que apoiam e endossam o nosso bom trabalho</span>
              <div class="seperator"></div>
            </header>
            <div class="partner-list" id="partner-slide">

              @foreach($companhia as $c)
              <div class="partner">
                <a href="#">
                  <img width="130" src="assets/images/companhia/icon/{{$c->icon}}" alt="image description" />
                  <img class="hover" width="130" src="assets/images/companhia/icon/{{$c->icon}}" alt="image description" />
                </a>
              </div>
              @endforeach
            </div>
          </div>
        </article>
      </main>

@endsection