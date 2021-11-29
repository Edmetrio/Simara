@extends('template')

@section('content')

<main id="main">
        <section class="content-block bg-white">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">THE ADVENTURE</h2>
              <span class="main-subtitle">Mastering the art of perfect adventure for 10+ years in the
                wild.</span>
              <div class="seperator"></div>
            </header>
            <div class="adventure-holder gallery-home-holder">
              <div class="row">
                <div class="col-md-6 img-block">
                  <!-- gallery list -->
                  <ul class="gallery-list gallery-with-icon">
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-01.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-bird"></span>
                        <span class="info">aerial</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-02.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-peak"></span>
                        <span class="info">land</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-03.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-water"></span>
                        <span class="info">water</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-04.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-asia"></span>
                        <span class="info">asia</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-05.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-arctic"></span>
                        <span class="info">arctic</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-06.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-africa"></span>
                        <span class="info">africa</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-07.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-plant"></span>
                        <span class="info">nature</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-08.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-wildlife"></span>
                        <span class="info">wildness</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-09.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-diamond"></span>
                        <span class="info">all</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6 text-block">
                  <div class="centered">
                    <h2 class="intro-heading">Vivendo uma Vida de Aventura</h2>
                    <p class="intro">
                      This is Photoshop's version of Lorem Ipsum. Proin
                      gravida nibh vel velit auctor aliquet. Aenean
                      sollicitudin, lorem quis bibendum auctor, nisi elit
                      consequat ipsum, nec sagittis sem nibh id elit. Duis sed
                      odio sit amet nibh vulputate cursus a sit amet mauris.
                      Morbi accumsan ipsum velit.
                    </p>
                    <a href="#" class="btn btn-info-sub btn-md btn-shadow radius">Dig More</a>
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
              <strong>Chamada <a href="tel:+258820046681">+258 82 004 6681/3</a></strong>
            </p>
          </div>
        </aside>
        <!-- article list holder -->
        <div class="content-block content-spacing">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">ÚLTIMAS POSTAGENS</h2>
              <span class="main-subtitle">Conira as últimas actualizações!</span>
              <div class="seperator"></div>
            </header>
            <div class="content-holder">
              <div class="row db-3-col">
                <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                    <a href="#">
                    <img src="{{asset('assets/img/post/africa.jpeg')}}" height="215" width="370" alt="image description" />
                    </a>
                    <div class="img-caption text-uppercase">
                      África do Sul
                    </div>
                  </div>
                  <h3><a href="#">Vamos Viajar a África do Sul</a></h3>
                  <p>
                  África do Sul é um país seguro para viajar, inclusive para mulheres. 
                  Os crimes contra turistas são raros e, na maioria das vezes, limitam-se 
                  a furtos.
                  </p>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                    <a href="#">
                      <img src="{{asset('assets/img/post/sida.jpeg')}}" height="215" width="370" alt="image description" />
                    </a>
                    <div class="img-caption text-uppercase">
                      Dia Mundial de HIV
                    </div>
                  </div>
                  <h3><a href="#">Dia Mundial de HIV</a></h3>
                  <p>
                  O Dia Mundial de Combate à AIDS ou Dia Mundial de Luta Contra a SIDA, 
                  internacionalmente definido como o dia 1° de dezembro, é uma data voltada 
                  para que o mundo una
                  </p>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                    <a href="#">
                      <img src="{{asset('assets/img/post/reserva.jpeg')}}" height="215" width="370" alt="image description" />
                    </a>
                    <div class="img-caption text-uppercase">
                      Reserva de Maputo
                    </div>
                  </div>
                  <h3><a href="#">Explore as Rerservas de Maputo</a></h3>
                  <p>
                  A Reserva de Elefantes de Maputo, oficialmente Reserva Especial de Maputo, 
                  é uma área de conservação localizada no extremo sul de Moçambique, no distrito 
                  de Matutuíne
                  </p>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                    <a href="#">
                      <img src="{{asset('assets/img/post/reserva.jpeg')}}" height="215" width="370" alt="image description" />
                    </a>
                    <div class="img-caption text-uppercase">
                      Dia da Paz
                    </div>
                  </div>
                  <h3><a href="#">04 d Outubro, Dia da Paz</a></h3>
                  <p>
                  Moçambique celebra hoje, feriado nacional, o Dia da Paz e 
                  da Reconciliação Nacional em homenagem à assinatura do Acordo 
                  Geral de Paz, firmada em Roma (Itália)
                  </p>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                    <a href="#">
                      <img src="{{asset('assets/img/post/africa.jpeg')}}" height="215" width="370" alt="image description" />
                    </a>
                    <div class="img-caption text-uppercase">
                      Dia da Vitória
                    </div>
                  </div>
                  <h3><a href="#">07 de Abril, Dia da Vitória</a></h3>
                  <p>
                  Moçambique celebra hoje, feriado nacional, o Dia da Paz e 
                  da Reconciliação Nacional em homenagem à assinatura do Acordo 
                  Geral de Paz, firmada em Roma (Itália)
                  </p>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                    <a href="#">
                      <img src="{{asset('assets/img/post/sida.jpeg')}}" height="215" width="370" alt="image description" />
                    </a>
                    <div class="img-caption text-uppercase">
                      Dia da Vitória
                    </div>
                  </div>
                  <h3><a href="#">07 de Abril, Dia da Vitória</a></h3>
                  <p>
                  Moçambique celebra hoje, feriado nacional, o Dia da Paz e 
                  da Reconciliação Nacional em homenagem à assinatura do Acordo 
                  Geral de Paz, firmada em Roma (Itália)
                  </p>
                </article>
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
                <article class="col-sm-6 col-md-4 article has-hover-s1">
                  <div class="thumbnail">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/post/africa.jpeg')}}" height="228" width="350" alt="image description" />
                    </div>
                    <h3 class="small-space">
                      <a href="tour-detail.html">Reserva Especial de Maputo</a>
                    </h3>
                    <span class="info">Por Adulto</span>
                    <aside class="meta">
                      <span class="country">
                        <span class="icon-world"> JV43+2C8, Machate</span>
                      </span>
                    </aside>
                    <p>
                    A Reserva de Elefantes de Maputo, oficialmente Reserva Especial de Maputo, 
                    é uma área de conservação localizada no extremo sul de Moçambique, no distrito 
                    de Matutuíne
                    </p>
                    <a href="tour-detail.html" class="btn btn-default">Mais Detalhes</a>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                      <span class="price">A partir de <span>4.600,00MT</span></span>
                    </footer>
                  </div>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s1">
                  <div class="thumbnail">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/post/reserva.jpeg')}}" height="228" width="350" alt="image description" />
                    </div>
                    <h3 class="small-space">
                      <a href="tour-detail.html">Complexo Mila</a>
                    </h3>
                    <span class="info">Por Pessoa</span>
                    <aside class="meta">
                      <span class="country">
                        <span class="icon-world"> </span>12 Countries
                      </span>
                    </aside>
                    <p>
                    A Reserva de Elefantes de Maputo, oficialmente Reserva Especial de Maputo, 
                    é uma área de conservação localizada no extremo sul de Moçambique, no distrito 
                    de Matutuíne
                    </p>
                    <a href="tour-detail.html" class="btn btn-default">Mais Detalhes</a>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="#"><i class="icon-instagram"></i></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                      <span class="price">A partir de <span>3.100,00MT</span></span>
                    </footer>
                  </div>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s1">
                  <div class="thumbnail">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/post/sida.jpeg')}}" height="228" width="350" alt="image description" />
                    </div>
                    <h3 class="small-space">
                      <a href="tour-detail.html">Sun City</a>
                    </h3>
                    <span class="info">Por Pessoa</span>
                    <aside class="meta">
                      <span class="country">
                        <span class="icon-world"> </span>12 Countries
                      </span>
                    </aside>
                    <p>
                    A Reserva de Elefantes de Maputo, oficialmente Reserva Especial de Maputo, 
                    é uma área de conservação localizada no extremo sul de Moçambique, no distrito 
                    de Matutuíne
                    </p>
                    <a href="tour-detail.html" class="btn btn-default">Mais Detalhes</a>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                      <span class="price">from <span>13.540,00MT</span></span>
                    </footer>
                  </div>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s1">
                  <div class="thumbnail">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/post/africa.jpeg')}}" height="228" width="350" alt="image description" />
                    </div>
                    <h3 class="small-space">
                      <a href="tour-detail.html">Reserva Especial de Maputo</a>
                    </h3>
                    <span class="info">Por Adulto</span>
                    <aside class="meta">
                      <span class="country">
                        <span class="icon-world"> JV43+2C8, Machate</span>
                      </span>
                    </aside>
                    <p>
                    A Reserva de Elefantes de Maputo, oficialmente Reserva Especial de Maputo, 
                    é uma área de conservação localizada no extremo sul de Moçambique, no distrito 
                    de Matutuíne
                    </p>
                    <a href="tour-detail.html" class="btn btn-default">Mais Detalhes</a>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                      <span class="price">A partir de <span>4.600,00MT</span></span>
                    </footer>
                  </div>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s1">
                  <div class="thumbnail">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/post/reserva.jpeg')}}" height="228" width="350" alt="image description" />
                    </div>
                    <h3 class="small-space">
                      <a href="tour-detail.html">Complexo Mila</a>
                    </h3>
                    <span class="info">Por Pessoa</span>
                    <aside class="meta">
                      <span class="country">
                        <span class="icon-world"> </span>12 Countries
                      </span>
                    </aside>
                    <p>
                    A Reserva de Elefantes de Maputo, oficialmente Reserva Especial de Maputo, 
                    é uma área de conservação localizada no extremo sul de Moçambique, no distrito 
                    de Matutuíne
                    </p>
                    <a href="tour-detail.html" class="btn btn-default">Mais Detalhes</a>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="#"><i class="icon-instagram"></i></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                      <span class="price">A partir de <span>3.100,00MT</span></span>
                    </footer>
                  </div>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s1">
                  <div class="thumbnail">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/post/sida.jpeg')}}" height="228" width="350" alt="image description" />
                    </div>
                    <h3 class="small-space">
                      <a href="tour-detail.html">Sun City</a>
                    </h3>
                    <span class="info">Por Pessoa</span>
                    <aside class="meta">
                      <span class="country">
                        <span class="icon-world"> </span>12 Countries
                      </span>
                    </aside>
                    <p>
                    A Reserva de Elefantes de Maputo, oficialmente Reserva Especial de Maputo, 
                    é uma área de conservação localizada no extremo sul de Moçambique, no distrito 
                    de Matutuíne
                    </p>
                    <a href="tour-detail.html" class="btn btn-default">Mais Detalhes</a>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                      <span class="price">from <span>13.540,00MT</span></span>
                    </footer>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>
        <!-- content block with guide info -->
        <section class="content-block guide-sub guide-add bg-white">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">MEET THE GUIDES</h2>
              <span class="main-subtitle">Our highly trained and efficient guides at your service</span>
              <div class="seperator"></div>
            </header>
            <div class="content-holder">
              <div class="row">
                <div class="col-sm-6 col-md-4 img-article">
                  <div class="holder">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/listing/img-13.jpg')}}" height="436" width="370" alt="image description" />
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="caption">
                      <h3 class="small-space">Jason Statham</h3>
                      <span class="designation">TREKKING GUIDE</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 img-article">
                  <div class="holder">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/listing/img-14.jpg')}}" height="436" width="370" alt="image description" />
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="caption">
                      <h3 class="small-space">Cleona Tropez</h3>
                      <span class="designation">TREKKING GUIDE</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 img-article">
                  <div class="holder">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/listing/img-15.jpg')}}" height="436" width="370" alt="image description" />
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-car"></i></a>
                        </li>
                        <i class=”fa fa-car”></i>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="caption">
                      <h3 class="small-space">Martin Blake</h3>
                      <span class="designation">TREKKING GUIDE</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- testimonial block -->
        <div class="testimonial-holder parallax" data-stellar-background-ratio="0.25" id="testimonial-home-page">
          <div class="container">
            <div id="testimonial-home-slide">
              <div class="slide">
                <blockquote class="testimonial-quote">
                  <div class="img">
                    <img src="{{asset('assets/img/thumbs/img-1.jpg')}}" height="112" width="112" alt="image description" />
                  </div>
                  <div class="text">
                    <cite>Artur Vilanculos - CEO</cite>
                    <q>"Foram poucas as vezes em que viajamos com agência, sempre gostei 
                      de pesquisar e organizar tudo sozinha, então, conheci a vossa empresa 
                      através do Instagram, gostei muito do conteúdo publicado, me transmitia 
                      um cuidado encontrado em poucos lugares. Via sempre como seus clientes 
                      eram mimados, e isso despertou muita curiosidade e vontade de ser paparicada
                       também.”</q>
                  </div>
                </blockquote>
              </div>
              <div class="slide">
                <blockquote class="testimonial-quote">
                  <div class="img">
                    <img src="{{asset('assets/img/thumbs/img-02.jpg')}}" height="112" width="112" alt="image description" />
                  </div>
                  <div class="text">
                    <cite>Vânia de Sousa - Marketing</cite>
                    <q>"Foram poucas as vezes em que viajamos com agência, sempre gostei 
                      de pesquisar e organizar tudo sozinha, então, conheci a vossa empresa 
                      através do Instagram, gostei muito do conteúdo publicado, me transmitia 
                      um cuidado encontrado em poucos lugares. Via sempre como seus clientes 
                      eram mimados, e isso despertou muita curiosidade e vontade de ser paparicada
                       também.”</q>
                  </div>
                </blockquote>
              </div>
              <div class="slide">
                <blockquote class="testimonial-quote">
                  <div class="img">
                    <img src="{{asset('assets/img/thumbs/img-03.jpg')}}" height="112" width="112" alt="image description" />
                  </div>
                  <div class="text">
                    <cite>Rivaldo Macuacua - Informático</cite>
                    <q>"Foram poucas as vezes em que viajamos com agência, sempre gostei 
                      de pesquisar e organizar tudo sozinha, então, conheci a vossa empresa 
                      através do Instagram, gostei muito do conteúdo publicado, me transmitia 
                      um cuidado encontrado em poucos lugares. Via sempre como seus clientes 
                      eram mimados, e isso despertou muita curiosidade e vontade de ser paparicada
                       também.”</q>
                  </div>
                </blockquote>
              </div>
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
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-travelagancy.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('img/logos/logo-travelagancy-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-around-world.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-around-world-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-tourist.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-tourist-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-adventure.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-adventure-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-around-world.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-around-world-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-travelagancy.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="img/logos/logo-travelagancy-hover.svg" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-adventure.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-adventure-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-around-world.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-around-world-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-travelagancy.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-travelagancy-hover.svg')}}" alt="image description" />
                </a>
              </div>
            </div>
          </div>
        </article>
      </main>

@endsection