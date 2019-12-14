@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Adicionar Grupo</h1>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('grupo.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" />
                </div>

                <div class="form-group">
                    <label for="link">Link:</label>
                    <input type="text" class="form-control" name="link" />
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <textarea class="form-control" name="descricao"></textarea>
                </div>
                <button type="submit" class="btn btn-primary-outline">Adicionar Grupo</button>
            </form>
        </div>
    </div>
</div>
@endsection