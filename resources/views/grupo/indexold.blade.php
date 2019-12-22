@extends('base')

@section('main')

<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
</div>

<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Grupos</h1>
        <div>
            <a style="margin: 19px;" href="{{ route('grupo.create')}}" class="btn btn-primary">Novo grupo</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>link</td>
                    <td>Descrição</td>
                    <td colspan=2></td>
                </tr>
            </thead>
            <tbody>
                @foreach($grupos as $grupo)
                <tr>
                    <td>{{$grupo->nome}}</td>
                    <td>{{$grupo->link}}</td>
                    <td>{{$grupo->descricao}}</td>
                    <td>
                        <a href="{{ route('grupo.edit',$grupo->id)}}" class="btn btn-primary">Alterar</a>
                    </td>
                    <td>
                        <form action="{{ route('grupo.destroy', $grupo->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Apagar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection