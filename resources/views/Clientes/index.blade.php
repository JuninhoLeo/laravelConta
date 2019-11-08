@extends('layout')
@section('content')

<form action="/clientes/create">
    <div class="field">
        <div>
            <div class="control">
                <button class="btn btn-info" type="submit">Novo Cliente</button>
            </div>
        </div>
    </div>
</form>


<div class="container">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data Cadastro</th>
        </tr>

        @foreach($clientes as $cliente)
        <tr>
            <th>{{ $cliente->id }}</th>
            <th>{{ $cliente->nome }}</th>
            <th>{{ $cliente->data_cadastro }}</th>
        </tr>
        @endforeach
    </table>
</div>

@endsection
