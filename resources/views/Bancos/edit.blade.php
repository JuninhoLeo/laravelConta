@extends('layout')
@section('content')

<div class="container col-md-4">
    <br>
    <form action="{{ route('bancos.update', $banco->id ) }}" method="post">
        @csrf
        @method('PUT')
        <div class="field">
            <div class="form-group">
                <strong>ID: </strong>{{ $banco->id }}
            </div>
        </div>
        <div class="field">
            <strong>Descrição:</strong>
            <div class="control">
                <input class="input" type="text" name="descricao" value="{{ $banco->descricao }}">
            </div>
        </div>
            <a class="btn btn-outline-danger" href="{{ route('bancos.index') }}">votar</a>
            <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection