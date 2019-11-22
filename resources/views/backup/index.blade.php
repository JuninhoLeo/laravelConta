@extends('layouts.app')
@section('content')

<?php

use App\Cliente;

$clientes = Cliente::All();
?>


<div class="container col-md-8">
    <a href="{{ route('movimentacoes.create') }}" class="btn btn-outline-info" style="margin:10px; float: right;">Nova Transação</a>
    @if($message = Session::get('success'))
    <div class="container">
        <div class="col-md-7">
            <div class="alert-box success">
                <p><b> {{ $message }}</b></p>
            </div>
        </div>
    </div>
    @endif
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Data</th>
                <th scope="col">Saldo Anterior</th>
                <th scope="col">Saldo Atual</th>
                <th></th>
            </tr>
        </thead>
        @foreach($clientesbk as $backup)
        <?php $date = new DateTime($backup->data);
        $dataInput =  $date->format('d/m/Y'); ?>
        <tbody>
            <tr>

                <th>{{ $backup->id }}</th>
                <?php
                foreach ($clientes as $cliente) {
                    if ($cliente->id == $backup->nome) {
                        echo '<td scope="row">' . $cliente->nome . '</td>';
                    }
                }
                ?>
                <td>{{ $dataInput }}</td>
                <td>{{ 'R$ '.number_format($backup->saldo_anterior, 2, ',', '.') }}</td>
                <td>{{ 'R$ '.number_format($backup->saldo_atual, 2, ',', '.') }}</td>
                <td>
                    <form action="{{ route('backup.destroy', $backup->id) }}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <center>
        <div class="col-md-2">
            {{ $clientesbk->links() }}
        </div>
    </center>
</div>

@endsection
