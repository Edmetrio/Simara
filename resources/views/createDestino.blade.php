@extends('templates.template')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Formulário do Destino</h4>
                <p class="sub-header">
                    Formulário de Cadastro de Destino: é especialmente utilizado para o registo de todas serviços
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

                @if(isset($destino))
                <form method="POST" enctype="multipart/form-data" action="{{url("destino/$destino->id")}}">
                    @method('PUT')
                @else
                <form action="{{url('destino')}}" method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Nome</label>
                            <input type="text" class="form-control" placeholder="Nome" name="nome" value="{{$destino->nome ?? ''}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Ícone</label>
                            <input type="file" class="form-control" name="icon">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        @if(isset($destino))
                        <div class="form-group col-md-6">
                            <span><img src="{{asset('./assets/images/destino/icon/'.$destino->icon)}}" style="width: 15%;" /></span>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <span><img src="{{asset('./assets/images/destino/foto/'.$destino->foto)}}" style="width: 15%;" /></span>
                        </div>
                        @else
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">@if(isset($destino)) Alterar @else Adicionar @endif</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection