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
        <form class="twocol-form" action="#">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-box">
                        <span class="holder height" style="text-align: center; font-size: 50px; font-weight: bold;">Agendar</span>
                    </div>
                    <div class="form-holder">
                        <div class="wrap">
                            <div class="hold">
                                <label for="name">Nome</label>
                                <input type="text" id="nome" class="form-control" />
                            </div>
                            <div class="hold">
                                <label for="uname1">E-mail</label>
                                <input type="email" id="email" class="form-control" />
                            </div>

                            <div class="holder">
                                <label for="select-region">Seleccione a Região</label>
                                <div class="select-holder">
                                    <select class="trip-select trip-select-v2 region" name="region" id="select-region">
                                        @foreach($servico as $s)
                                        <option value="{{$s->id}}">{{$s->titulo}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="hold">
                                <label for="reg-pass">Orçamento</label>
                                <input type="text" id="reg-pass" class="form-control" placeholder="12.500M,00MT" />
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