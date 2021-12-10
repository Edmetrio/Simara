@extends('templates.template')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Formulário do Serviço</h4>
                <p class="sub-header">
                    Formulário de Cadastro de Serviço: é especialmente utilizado para o registo de todas serviços
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

                @if(isset($servico))
                <form method="POST" enctype="multipart/form-data" action="{{url("servico/$servico->id")}}">
                    @method('PUT')
                @else
                <form action="{{url('servico')}}" method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Título</label>
                            <input type="text" class="form-control" placeholder="Título" name="titulo" value="{{$servico->titulo ?? ''}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">SubTítulo</label>
                            <input type="text" class="form-control" placeholder="SubTítulo" name="subtitulo" value="{{$servico->subtitulo ?? ''}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Ícone</label>
                            <input type="file" class="form-control" name="icon">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Descrição</label>
                            <input type="text" class="form-control" placeholder="descricao" name="descricao" value="{{$servico->descricao  ?? ''}}" />
                        </div>
                        @if(isset($servico))
                        <div class="form-group col-md-6">
                            <span><img src="{{asset('./assets/images/icon/'.$servico->icon)}}" style="width: 15%;" /></span>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <span><img src="{{asset('./assets/images/foto/'.$servico->foto)}}" style="width: 15%;" /></span>
                        </div>
                        @else
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">@if(isset($servico)) Alterar @else Adicionar @endif</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection