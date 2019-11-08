@extends('layout')
@section('content')

<div class="container">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data de Retirada</th>
            <th>Total Saldo</th>
        </tr>

        @foreach($clientesbk as $backup)
        <tr>
            <th>{{ $backup->id }}</th>
            <th>{{ $backup->nome }}</th>
            <th>{{ $backup->data_retirada }}</th>
            <th>{{ $backup->saldo }}</th>
        </tr>
        @endforeach
    </table>
</div>

@endsection
