@extends('templates.template')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Formulário do Pacote</h4>
                <p class="sub-header">
                    Formulário de Cadastro de pacote: é especialmente utilizado para o registo de todas serviços
                </p>
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

                @if(isset($pacote))
                <form method="POST" enctype="multipart/form-data" action="{{url("pacote/$pacote->id")}}">
                    @method('PUT')
                @else
                <form action="{{url('pacote')}}" method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Título</label>
                            <input type="text" class="form-control" placeholder="Título" name="titulo" value="{{$pacote->titulo ?? ''}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">SubTítulo</label>
                            <input type="text" class="form-control" placeholder="SubTítulo" name="subtitulo" value="{{$pacote->subtitulo ?? ''}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Pacote</label>
                            <select name="servico_id" class="form-control">
                                <option value="{{$pacote->servicos->id ?? ''}}">{{$pacote->servicos->titulo ?? 'Seleccione o Serviço'}}</option>
                                @foreach($servico as $s)
                                <option value="{{$s->id}}">{{$s->titulo}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Ícone</label>
                            <input type="file" class="form-control" name="icon">
                        </div>
                        
                        @if(isset($pacote))
                        <div class="form-group col-md-6">
                            <span><img src="{{asset('./assets/images/pacote/icon/'.$pacote->icon)}}" style="width: 15%;" /></span>
                        </div>
                        @else
                        @endif
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Reserva</label>
                            <input type="text" class="form-control" placeholder="Por pessoa" name="reserva" value="{{$pacote->reserva ?? ''}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Descrição</label>
                            <input type="text" class="form-control" placeholder="descricao" name="descricao" value="{{$pacote->descricao ?? ''}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Preço</label>
                            <input type="text" class="form-control" placeholder="12.000,00" name="preco" value="{{$pacote->preco ?? ''}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Cidade</label>
                            <input type="text" class="form-control" placeholder="Maputo - Moçambique" name="cidade" value="{{$pacote->cidade ?? ''}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">@if(isset($pacote)) Alterar @else Adicionar @endif</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection