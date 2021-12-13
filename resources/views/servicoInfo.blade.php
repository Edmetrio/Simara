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
                  <div class="btn-holder">
                    <a
                      href="#"
                      class="btn btn-info-sub btn-md btn-shadow radius"
                      >Dig More</a
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
          </div>

        </main>

@endsection