@extends('templates.template')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Formulário do post</h4>
                <p class="sub-header">
                    Formulário de Cadastro de post: é especialmente utilizado para o registo de todas serviços
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

                @if(isset($post))
                <form method="POST" enctype="multipart/form-data" action="{{url("post/$post->id")}}">
                    @method('PUT')
                @else
                <form action="{{url('post')}}" method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Título</label>
                            <input type="text" class="form-control" placeholder="Título" name="titulo" value="{{$post->titulo ?? ''}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">SubTítulo</label>
                            <input type="text" class="form-control" placeholder="SubTítulo" name="subtitulo" value="{{$post->subtitulo ?? ''}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Ícone</label>
                            <input type="file" class="form-control" name="icon">
                        </div>
                        
                        @if(isset($post))
                        <div class="form-group col-md-6">
                            <span><img src="{{asset('./assets/images/post/icon/'.$post->icon)}}" style="width: 15%;" /></span>
                        </div>
                        @else
                        @endif
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Descrição</label>
                            <input type="text" class="form-control" placeholder="descricao" name="descricao" value="{{$post->descricao ?? ''}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">@if(isset($post)) Alterar @else Adicionar @endif</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection