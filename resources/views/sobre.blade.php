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
        <div class="col-sm-6 description-text">
          <h3>Tratamento de Alta Qualidade</h3>
          <h4><strong>Hospitais</strong></h4>
          <p>
          <ul>
            <li>Seleecionamos as melhores instituições de saúde na Índia.</li>
            <li>Os hospitais seleccionados tem instalações altamente equipados com tecnologias avançadas, de última geração.</li>
            <li>Estes hospitais respondem aos padrões internacionais de atendimentos clínico, ambiente seguro, tratamento e segurança nos medicamentos.</li>
            <li>O respeito pelos direitos do utente, sua privacidade e obedecem as normas internacionais de controle de infecções.</li>
          </ul>
          </p>
        </div>
        <div class="col-sm-6 description-text">
          <h3>Os factores chaves a considerar ao seleccionar um hospital são:</h3>
          <h4><strong>Humanismo, credenciação e certificação</strong></h4>
          <p>Acreditação e certificação são os elementos muito importantes na esolha de hospitais parceiros e deve ter pelo menos uma das seguintes certificações de renome:</p>
          <p>
          <ul>
            <li>Joint Commission Internacional (JCI), EUA</li>
            <li>National Integrated Accreditation for healthcare (primeiro programa de acreditação de hospitais na Índia USA)</li>
            <li>Conselho nacional de acreditação para hospitais e profissionais de saúde.</li>
            <li>Órgão de qualidade de conselho de Índia</li>
            <li>Certificação</li>
            <li>Certificação ISO 9001-2000</li>
          </ul>
          </p>

          <h4><strong>Padrão assistência ao paciente</strong></h4>
          <p>
          <ul>
            <li>Toda gama de hospitais seleccionados tem um grande grupo de profissionais altamente qualificados e com experiência relevante e pessoal de apoio, garantindo assim atendimento individualizado.</li>
          </ul>
          </p>

          <h4><strong>MÉDICOS</strong></h4>
          <p>
          <ul>
            <li>Médicos internistas e cirurgiões das melhores equipes de médicos na Índia. Eles têm trabalhado e sido treinados nas melhores insituições do mundo.</li>
            <li>Cada um deles tem uma rica experiência na realização de milhares de cirurgias com excelentes resultados.</li>
          </ul>
          </p>

          <h4><strong>Experiência</strong></h4>
          <p>
          <ul>
            <li>Para seu crédito, os médicos internistas e cirurgiões têm em média, 20 anos de experiência nas suas respectivas áreas de especialidade o que garante melhores resultados.</li>
          </ul>
          </p>

          <h4><strong>Aspecto financeiro</strong></h4>
          <p>
          <ul>
            <li>Os hospitais na Índia oferecem assistência médica a custos significativamente baixos em comperação </li>
            <li>com o resto do mundo. A maioria das estimativas indicam que os custos de tratamento na Índia começam em torno de um décimo dos preços em comparação com o tratamento nos Estados Unidos ou Grã-Bretanha e muitos países africanos. Os aspectos financeitos são fundamentais e a Med Access Índia sempre procura fornecer os preços mais acessíveis com excelente benefício para o paciente.</li>
          </ul>
          </p>
        </div>

        <div class="col-sm-6 description-text">
          <h3>Criamos pacotes para as seguintes áreas de saúde:</h3>
          <p>
          <ul>
            <li>Consultas de Check up,</li>
            <li>Cirurgias em Cardiologia</li>
            <li>Obesidade</li>
            <li>Oftamologia</li>
            <li>Neurologia</li>
            <li>Fertilização</li>
            <li>Tratamento de cancer</li>
            <li>Substituição de Órgãos</li>
            <li>E outros</li>
            <li>Acompanhamento durante a estadia</li>
            <li>Intérprete</li>
            <li>Visitas enquanto estiver internado</li>
            <li>Garantia de um tratamento de qualidade</li>
            <li>Baixo custo</li>
          </ul>
          </p>
        </div>

        <div class="col-sm-6 description-text">
          <h3>Apoio psicologisco</h3>
          <p>
          <ul>
            <li>Apoio psicológico no turismo de saúde é fundamental para um bom resultado no tratamento.  O nosso parceiro Med Access Índia está preparado para dar todo esse apoio e acompanhamento aos pacientes. Os pacientes que viajam para países estrangeiros precisam de sentir segurança emocional e pessoal. Oferemos aos nossos clientes um ambiente extremamente acolhedor e hospitaleiro.</li>
          </ul>
          </p>
        </div>

        <div class="col-sm-6 description-text">
          <h3>Apoio Logístico</h3>
          <p>
          <ul>
            <li>Tratamento de sua viagem para a Índia a partir de qualquer lugar, proporcionando acomodação adequado, garantindo confiança e segurança, através da Med Access Índia que tem a responsabilidade e os cuidados de coordenação total com o hospital e médicos durante todo tempo de tratamento para a recuperação rápida e seu regresso a casa. Além de fornecer apoio nos serviços de saúde de classe mundial na Índia também providenciamos:</li>
            <li>Passagens de avião</li>
            <li>Tramitamos o visto</li>
            <li>Acomodação</li>
            <li>Transferes...</li>
          </ul>
          </p>
        </div>

        <div class="col-sm-6 description-text">
          <h3>SIMULAÇÃO DE CUSTOS</h3>
          <p>
            De acordo com o seu pré-diagnóstivo fazemos simulação de custo para melhor encaminhamento.
          </p>
        </div>
      </div>
    </div>
  </div>

</main>
</div>
@endsection