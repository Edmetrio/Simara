@extends('templates')

@section('content')

<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="about-banner">
        <div class="banner-text">
          <div class="center-text">
            <div class="container">
              <h1>Sobre nós</h1>
              <strong class="subtitle">Encontra toda informação sobre a Simara</strong>
              <!-- breadcrumb -->
              <nav class="breadcrumbs">
                <ul>
                  <li><a href="{{ route('inicio.index')}}">Início</a></li>
                  <li><span>SOBRE NÓS</span></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- main container -->
      <main id="main">
        <!-- content block with article -->
        <div class="content-block bg-white content-center">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">SOBRE NÓS</h2>
              <strong class="main-subtitle">Encontra toda informação sobre a Simara.</strong>
              <div class="seperator"></div>
            </header>
            <div class="row text-center">
              <div class="col-sm-4 article">
                <div class="img-wrap1">
                  <img width="150" src="{{asset('assets/img/icons/ico01.svg')}}" alt="image description" />
                </div>
                <div class="description">
                  <h3>Modelo</h3>
                  <p>
                    A saúde e tratamento médico em boas mãos
                  </p>
                </div>
              </div>
              <div class="col-sm-4 article">
                <div class="img-wrap1">
                  <img width="120" src="{{asset('assets/img/icons/ico02.svg')}}" alt="image description" />
                </div>
                <div class="description">
                  <h3>Visão</h3>
                  <p> 
                    Nossa visão é de prestar um bom serviço e ser reconecida como a melhor
                    empresa de apoio e acompanhamento na área de turismo de saúde.
                  </p>
                </div>
              </div>
              <div class="col-sm-4 article">
                <div class="img-wrap1">
                  <img width="118" src="{{asset('assets/img/icons/ico03.svg')}}" alt="image description" />
                </div>
                <div class="description">
                  <h3>Missão</h3>
                  <p>
                    Proporcionar a possibilidade de tratamento diferenciado no estrangeiro a quem precisa
                    a custos razoáveis.
                    Encaminharmos os nossos clientes para entidade de mérito e seriedade comprovada.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content block with article -->
        <div class="content-block bg-gray">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">SOBRE A SIMARA</h2>
              <strong class="main-subtitle">Visão geral sobre a SIMARA</strong>
              <div class="seperator"></div>
            </header>
            <div class="row">
              <div class="col-sm-6 description-text">
                <h3>Parceria com Med Access Índia.</h3>
                <p>
                  A SIMARA TRAVEL em parceria com a Med Access Índia a nível internacional oferece todas as possibilidades
                  de acesso a um serviço de saúde de qualidade de nível mundial.

                </p>
                <p>
                  Este serviço seguro e acessível é fornecido nos hospitais de referência na Índia.<br />
                  Med Access Índia em um serviço multidimensional de apoio e acompanhamento centrado no paciente.
                  Engloba um amplo espectro de serviços para satisfazer os nossos clientes.
                </p>
              </div>
              <div class="col-sm-6 description-text">
                <h3>Soluções da Parceria.</h3>
                <p>
                  Esta parceria entre a SIMARA TRAVEL & a Med Access Índia assenta em quatro pilares de Turismo de Saúde que definem
                  as necessidades dos pacientes no sistema de saúde existente e oferecem as soluções:<br />
                </p>
                <p>
                <ul>
                    <li>Tratamento de alta qualidade</li>
                    <li>Custo acessível</li>
                    <li>Apoio psicológico</li>
                    <li>Apoio logísticos</li>
                </ul>
                </p>
              </div>
            </div>
          </div>
        </div>

      </main>
    </div>
@endsection
