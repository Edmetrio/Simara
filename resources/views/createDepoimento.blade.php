@extends('templates.template')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Formulário do depoimento</h4>
                <p class="sub-header">
                    Formulário de Cadastro de depoimento: é especialmente utilizado para o registo de todas serviços
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

                @if(isset($depoimento))
                <form method="POST" enctype="multipart/form-data" action="{{url("depoimento/$depoimento->id")}}">
                    @method('PUT')
                @else
                <form action="{{url('depoimento')}}" method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Nome</label>
                            <input type="text" class="form-control" placeholder="nome" name="nome" value="{{$depoimento->nome ?? ''}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Posição</label>
                            <input type="text" class="form-control" placeholder="CEO" name="posicao" value="{{$depoimento->posicao ?? ''}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Descrição</label>
                            <input type="text" class="form-control" placeholder="descricao" name="descricao" value="{{$depoimento->descricao ?? ''}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Ícone</label>
                            <input type="file" class="form-control" name="icon">
                        </div>
                        
                        @if(isset($depoimento))
                        <div class="form-group col-md-6">
                            <span><img src="{{asset('./assets/images/depoimento/icon/'.$depoimento->icon)}}" style="width: 15%;" /></span>
                        </div>
                        @else
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">@if(isset($depoimento)) Alterar @else Adicionar @endif</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection