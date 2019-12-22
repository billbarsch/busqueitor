@extends('base')
@section('main')

@if(session()->get('success'))
<br>
<div class="col-sm-12">
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
</div>
@endif

<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Grupos</h1>
        <div>
            <a style="margin: 19px;" href="{{ route('grupo.create')}}" class="btn btn-primary">Novo grupo</a>
        </div>

        <form action="{{ route('grupo.index')}}" method="get">
            <div class="input-group md-form form-sm form-2 pl-0">
                <input autofocus class="form-control my-0 py-1 amber-border" type="text" name="search" placeholder="Buscar grupo..." aria-label="Search" value="{{ request('search')}}">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit"><i class="fa fa-search text-grey" aria-hidden="true"></i></button>
                </div>
            </div>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>link</td>
                    <td>Descrição</td>
                </tr>
            </thead>
            <tbody>
                @foreach($grupos as $grupo)
                <tr>
                    <td>{{$grupo->nome}}</td>
                    <td><a target="_blank" href="{{$grupo->link}}">{{$grupo->link}}</a></td>
                    <td>{{$grupo->descricao}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection