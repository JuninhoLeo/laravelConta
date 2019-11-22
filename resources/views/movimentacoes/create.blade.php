@extends('layouts.app')
@section('content')

<?php

use App\Cliente;
use App\Banco;

$bancos = Banco::All();
$clientes = Cliente::All();

?>
<div class="container col-md-4">
    <form id="createConta" name="createConta" method="POST" action="/movimentacoes">
        {{ csrf_field() }}
        <label for="lblCliente" class="text-info" style="font-size: 16px;">De:</label>
        <br>
        <div class="form-row">
            <div class="form-group">
                <select name="cliente" id="cliente"style="height:40px; width: 430px; font-size: 18px;" required>
                    <option value="">Selecione</option>
                    @foreach($clientes as $cliente)
                    <option value=" {{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <label for="lblBanco" class="text-info" style="font-size: 16px;">Tipo de transação:</label>
        <br>
        <div class="form-row">
            <div class="form-group">
                <select name="tipo" style="height:40px; width: 430px; font-size: 18px;" required>
                    <option value="">Selecione</option>
                    <option value="1">Saque</option>
                    <option value="-1">Depósito</option>
                </select>
            </div>
        </div>
        <label for="saldo" class="text-info" style="font-size: 16px;">Valor:</label>
        <br>
        <div class="form-row">
            <div class="form-group">
                <input type="number" name="valor" id="valor" placeholder="Insira o Valor" style="height:40px; width: 430px; font-size: 18px;" required>
                <input type="hidden" name="saldo" value="">
            </div>
        </div>
        <div align="right">
            <a class="btn btn-danger" href="{{ route('backup.index') }}">Voltar</a>
            <button type="reset" class="btn btn-warning">Limpar</button>
            <button type="submit" class="btn btn-success  btn-lg">Salvar</button>
        </div>
    </form>
</div>
@endsection
