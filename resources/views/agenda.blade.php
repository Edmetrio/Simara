@extends('templates')

@section('content')

<!-- main container-->
<main id="main">
    <!-- top information area -->
    <div class="inner-top">
        <div class="container">
            <h1 class="inner-main-heading">Menú - Agendar</h1>
            <!-- breadcrumb -->
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('inicio.index') }}">Início</a></li>
                    <li><a href="">Menu</a></li>
                    <li><span>Agendar</span></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="inner-main common-spacing container">
        <!-- form -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Opss!</strong> Algum problema com seu formulário<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if ($message = Session::get('status'))
        <div>
            <p class="alert alert-success" class="table p-field p-col-12 p-md-6 table-striped" style="text-align: center;">{{ $message }}</p>
        </div>
        @endif
        <form class="twocol-form" action="{{ route('agenda.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="top-box">
                        <span class="holder height" style="text-align: center; font-size: 50px; font-weight: bold;">AGENDAR</span>
                    </div>
                    <div class="form-holder">
                        <div class="wrap">
                            <div class="hold">
                                <label for="name">Nome</label>
                                <input type="text" name="nome" class="form-control" />
                            </div>
                            <div class="hold">
                                <label for="uname1">E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="simaratravel@teledata.mz" />
                            </div>

                            <div class="holder">
                                <label for="select-region">Seleccione o Serviço</label>
                                <div class="select-holder">
                                    <select class="trip-select trip-select-v2 region" name="regiao" id="select-region">
                                        @foreach($servico as $s)
                                        <option value="{{$s->titulo}}">{{$s->titulo}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="hold">
                                <label for="reg-pass">Orçamento</label>
                                <input type="text" name="orcamento" class="form-control" placeholder="0.0MT" />
                            </div>

                            <div class="btn-hold" style="width: 12px;">
                                <button type="submit" class="btn btn-default">
                                    AGENDAR
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
</div>

@endsection