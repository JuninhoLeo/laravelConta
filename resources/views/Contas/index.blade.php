@extends('layouts.app')
@section('content')

<?php

use App\Cliente;
use App\Banco;

$clientes = Cliente::All();
$bancos = Banco::All();
?>

<div class="container col-md-9">
    <a href="{{ route('contas.create') }}" class="btn btn-outline-info" style="margin:10px; float: right;">Nova Conta</a>
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
                <th scope="col">Número</th>
                <th scope="col">Cliente</th>
                <th scope="col">Banco</th>
                <th scope="col">Saldo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @foreach($contas as $conta)
        <tbody>
            <tr>
                <th scope="row">{{ $conta->id }}</th>
                <?php
                foreach ($clientes as $cliente) {
                    if ($cliente->id == $conta->codcliente) {
                        echo '<td>' . $cliente->nome . '</td>';
                    }
                }

                foreach ($bancos as $banco) {
                    if ($banco->id == $conta->codbanco) {
                        echo '<td>' . $banco->descricao . '</td>';
                    }
                }
                ?>
                <td>{{ 'R$ '.number_format($conta->saldo, 2, ',', '.') }}</td>
                <td style="float: right;">
                    <form action="{{ route('contas.destroy',$conta->id) }}" method="POST">
                        <a class="btn btn-warning" href="{{ route('contas.edit', $conta->id ) }}">Editar</a>
                        <a class="btn btn-success" href="{{ route('contas.show', $conta->id) }}">Mostar</a>
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <center>
        <div class="col-md-2">
            {{ $contas->links() }}
        </div>
    </center>
</div>
@endsection
