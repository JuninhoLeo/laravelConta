@extends('layouts.app')
@section('content')
<?php

use App\Cliente;
use App\Banco;

$bancos = Banco::All();
$clientes = Cliente::All();

?>
<div class="container col-md-4">
    <form id="createConta" name="createConta" method="POST" action="/contas">
        {{ csrf_field() }}
        <label for="lblCliente" class="text-info" style="font-size: 16px;">Cliente:</label>
        <br>
        <div class="form-row">
            <div class="form-group">
                <select name="codcliente" style="height:40px; width: 430px; font-size: 18px;" required>
                    <option value="">Selecione</option>
                    @foreach($clientes as $cliente)
                    <option value=" {{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <label for="lblBanco" class="text-info" style="font-size: 16px;">Banco:</label>
        <br>
        <div class="form-row">
            <div class="form-group">
                <select name="codbanco" style="height:40px; width: 430px; font-size: 18px;" required>
                    <option value="">Selecione</option>
                    @foreach($bancos as $banco)
                    <option value=" {{ $banco->id }}">{{ $banco->descricao }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <label for="saldo" class="text-info" style="font-size: 16px;">Saldo:</label>
        <br>
        <div class="form-row">
            <div class="form-group">
                <input type="number" name="saldo" id="saldo" placeholder="Saldo do Cliente" style="height:40px; width: 430px; font-size: 18px;" required>
            </div>
        </div>
        <div align="right">
            <a class="btn btn-danger" href="{{ route('contas.index') }}">Voltar</a>
            <button type="reset" class="btn btn-warning">Limpar</button>
            <button type="submit" class="btn btn-success  btn-lg">Salvar</button>
        </div>
    </form>
</div>

@endsection
