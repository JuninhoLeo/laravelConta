@extends('layouts.app')
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
                <input class="input" type="text" name="nome" value="{{ $cliente->nome }}" style="height:40px; width: 430px; font-size: 18px;" required>
            </div>
        </div>
        <div class="field">
            <strong>Data Cadastro:</strong>
            <div class="control">
                <input class="input" type="date" name="data_cadastro" value="{{ $cliente->data_cadastro }}" style="height:40px; width: 430px; font-size: 18px;" required>
            </div>
        </div>
        <div style="float: right;">
            <a class="btn btn-outline-danger" href="{{ route('clientes.index') }}">voltar</a>
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection
