@extends('layout')
@section('content')

<div class="container col-md-4">
    <br>
    <form action="{{ route('clientes.update', $cliente->id ) }}" method="post">
        @csrf
        @method('PUT')
        <div class="field">
            <div class="form-group">
                <strong>ID: </strong>{{ $cliente->id }}
            </div>
        </div>
        <div class="field">
            <strong>Nome:</strong>
            <div class="control">
                <input class="input" type="text" name="nome" value="{{ $cliente->nome }}">
            </div>
        </div>
        <div class="field">
            <strong>Data Cadastro:</strong>
            <div class="control">
                <input class="input" type="date" name="data_cadastro" value="{{ $cliente->data_cadastro }}">
            </div>
        </div>
            <a class="btn btn-outline-danger" href="{{ route('clientes.index') }}">votar</a>
            <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection