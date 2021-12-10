@extends('templates.template')

@section('content')


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Lista das Serviços</h4>
                        <div class="input-group-append" style="float: right;">
                            <a href="{{ route ('destino.create')}}" class="btn btn-primary"> Adicionar</a>
                        </div>
                        <p class="text-muted font-13 mb-4">
                            Serviços: são colocados todos serviços existentes na empresa
                        </p>
                        @if(session('status'))
                        <div class="alert alert-success" role="alert" style="text-align: center; font-weight: bold;">
                            <p class="status">{{session('status')}}</p>
                        </div>
                        @endif
                        <table id="basic-datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>foto</th>
                                    <th>icon</th>
                                    <th>Acções</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($destino as $d)
                                    <tr>
                                        <td>{{$d->nome}}</td>
                                        <td><img class="img-fluid" src="assets/images/destino/foto/{{$d->foto}}" style="width: 30px; text-align: center;" /></td>
                                        <td><img class="img-fluid" src="assets/images/destino/icon/{{$d->icon}}" style="width: 30px; text-align: center;" /></td>
                                        <td role="gridcell"  style="display: flex; justify-content: flex-start;">
                                        <a href="{{url("destino/$d->id/edit")}}">Alterar</a>
                                        <form action="{{ route('destino.destroy',$d->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Apagar</button>
                                        </form>
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection