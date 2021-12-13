@extends('templates')

@section('content')

<main id="main">
          <!-- main tour information -->
          <section class="container-fluid trip-info">
            <div class="same-height two-columns row">
              <div class="height col-md-6">
                <!-- top image slideshow -->
                <div id="tour-slide">
                  <div class="slide">
                    <div class="bg-stretch">
                      <img
                      src="../assets/images/pacote/icon/{{$detalhes->icon}}"
                        alt="image descriprion"
                        height="1104"
                        width="966"
                      />
                    </div>
                  </div>
                  <div class="slide">
                    <div class="bg-stretch">
                      <img
                      src="../assets/images/pacote/icon/{{$detalhes->icon}}"     
                        alt="image descriprion"
                        height="1104"
                        width="966"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="height col-md-6 text-col">
                <div class="holder">
                  <h1 class="small-size">Viaja para {{$detalhes->titulo}}</h1>
                  <div class="price">a partir de  <strong>{{$detalhes->preco}}MT</strong></div>
                  <div class="description">
                    <p>
                      {{$detalhes->descricao}}.
                    </p>
                  </div>
                  <ul class="reviews-info">
                    <li>
                      <div class="info-left">
                        <strong class="title">Reviews</strong>
                        <span class="value">75 Reviews</span>
                      </div>
                      <div class="info-right">
                        <div class="star-rating">
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span class="disable"
                            ><span class="icon-star"></span
                          ></span>
                        </div>
                        <span class="value">5/5</span>
                      </div>
                    </li>
                    <li>
                      <div class="info-left">
                        <strong class="title">Vacation Style</strong>
                        <span class="value">Adult Group</span>
                      </div>
                      <div class="info-right">
                        <ul class="ico-list">
                          <li>
                            <span class="icon icon-hiking"></span>
                          </li>
                          <li>
                            <span class="icon icon-mount"></span>
                          </li>
                          <li>
                            <span class="icon icon-camping"></span>
                          </li>
                        </ul>
                        <span class="value">Camping Trek</span>
                      </div>
                    </li>
                    <li>
                      <div class="info-left">
                        <strong class="title">Activity Level</strong>
                        <span class="value">Quite Tough</span>
                      </div>
                      <div class="info-right">
                        <ul class="ico-list">
                          <li>
                            <span class="icon icon-level3"></span>
                          </li>
                          <li>
                            <span class="icon icon-level5"></span>
                          </li>
                          <li>
                            <span class="icon icon-level7"></span>
                          </li>
                        </ul>
                        <span class="value">9/10</span>
                      </div>
                    </li>
                    <li>
                      <div class="info-left">
                        <strong class="title">Group Size</strong>
                        <span class="value">Medium Grougs</span>
                      </div>
                      <div class="info-right">
                        <ul class="ico-list">
                          <li>
                            <span class="icon icon-group-small"></span>
                          </li>
                          <li>
                            <span class="icon icon-group-medium"></span>
                          </li>
                          <li>
                            <span class="icon icon-group-large"></span>
                          </li>
                        </ul>
                        <span class="value">6/10</span>
                      </div>
                    </li>
                  </ul>
                  <div class="btn-holder">
                    <a href="#" class="btn btn-lg btn-info">Agende agora</a>
                  </div>
                  <ul class="social-networks social-share">
                    <li>
                      <a href="#" class="facebook">
                        <span class="ico">
                          <span class="icon-facebook"></span>
                        </span>
                        <span class="text">Share</span>
                      </a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <div class="tab-container">
            <nav class="nav-wrap" id="sticky-tab">
              <div class="container">
                <!-- nav tabs -->
                <ul class="nav nav-tabs text-center" role="tablist">
                  <li role="presentation" class="active">
                    <a
                      href="#tab01"
                      aria-controls="tab01"
                      role="tab"
                      data-toggle="tab"
                      >Visão geral</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tab02"
                      aria-controls="tab02"
                      role="tab"
                      data-toggle="tab"
                      >Itinerário</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tab03"
                      aria-controls="tab03"
                      role="tab"
                      data-toggle="tab"
                      >Acomodação</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tab04"
                      aria-controls="tab04"
                      role="tab"
                      data-toggle="tab"
                      >Perguntas frequentes &amp; Análise</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tab05"
                      aria-controls="tab05"
                      role="tab"
                      data-toggle="tab"
                      >Galeria</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tab06"
                      aria-controls="tab06"
                      role="tab"
                      data-toggle="tab"
                      >Datas &amp; Preços</a
                    >
                  </li>
                </ul>
              </div>
            </nav>
            <!-- tab panes -->
            <div class="container tab-content trip-detail">
              <!-- overview tab content -->
              <div role="tabpanel" class="tab-pane active" id="tab01">
                <div class="row">
                  <div class="col-md-6">
                    <strong class="header-box"
                      >Visão Geral</strong>
                  </div>
                </div>
              </div>
              <!-- itinerary tab content -->
              <div role="tabpanel" class="tab-pane" id="tab02">
                <div class="row">
                  <div class="col-md-6">
                    <ol class="detail-accordion">
                    </ol>
                  </div>
                  <div class="col-md-6">
                  </div>
                </div>
              </div>
              <!-- accomodation tab content -->
              <div role="tabpanel" class="tab-pane" id="tab03">
                <div class="row">
                </div>
              </div>
              <!-- faq and review tab content -->
              <div role="tabpanel" class="tab-pane" id="tab04">
                <div class="row">

                </div>
              </div>
              <!-- gallery tab content -->
              <div role="tabpanel" class="tab-pane" id="tab05">
                <ul class="row gallery-list has-center">
                @foreach($pacote as $p)
                <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="#"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="../assets/images/pacote/icon/{{$p->icon}}"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      <span class="caption">
                        <span class="centered">
                          <strong class="title">{{$p->titulo}}</strong>
                          <span class="sub-text">{{$p->subtitulo}}</span>
                        </span>
                      </span>
                    </a>
                  </li>
                  @endforeach

                </ul>
              </div>
              <!-- dates and prices tab content -->
              <div role="tabpanel" class="tab-pane" id="tab06">
                <div class="table-container">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            <strong class="date-text">Datas de Partida</strong>
                            <span class="sub-text">Datas Confirmadas</span>
                          </th>
                          <th>
                            <strong class="date-text">Estado da Viagem</strong>
                            <span class="sub-text">Estado da Viagem</span>
                          </th>
                          <th>
                            <strong class="date-text">Preço</strong>
                            <span class="sub-text">Incluindo voos</span>
                          </th>
                          <th>
                            <strong class="date-text">Preço</strong>
                            <span class="sub-text">Excluindo voos</span>
                          </th>
                          <th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Sex, 18 Out '16 - Dom, 04 Nov '16
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Disponível &amp; Garantido
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">24.000,00MT</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">25.000,00MT</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                <a href="#" class="btn btn-default">AGENDE AGORA</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cell">
                              <div class="middle">
                              Sex, 18 Out '16 - Dom, 04 Nov '16
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">Reservado &amp; garantido</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">24.000,00MT</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">25.000,00MT</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                <a href="#" class="btn btn-default">AGENDE AGORA</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cell">
                              <div class="middle">
                              Sex, 18 Out '16 - Dom, 04 Nov '16
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Disponível
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">24.000,00MT</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">25.000,00MT</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                <a href="#" class="btn btn-default">AGENDE AGORA</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                  <div class="load-more text-center text-uppercase">
                    <a href="#">MAIS DATAS &amp; PREÇOS</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                    <!-- recent block -->
            @if(isset($pacote))
            <aside class="recent-block recent-gray recent-wide-thumbnail">
            <div class="container">
              <h2 class="text-center text-uppercase">ÚLTIMAS PUBLICAÇÕES</h2>
              <div class="row">
              @foreach($pacote as $p)
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
                      <div class="sub-info">
                     
                        <span>{{$p->preco}}MT</span>
                      </div>
                      
                    </footer>
                  </div>
                </article>
                @endforeach
              </div>
            </div>
          </aside>
          @else
          @endif

          </main>
@endsection