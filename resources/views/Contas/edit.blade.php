@extends('layouts.app')
@section('content')

<?php

use App\Cliente;
use App\Banco;

$clientes = Cliente::All();
$bancos = Banco::All();
?>

<div class="container col-md-4">
    <br>
    <form action="{{ route('contas.update', $conta->id ) }}" method="post">
        @csrf
        @method('PUT')
        <div class="field">
            <div class="form-group">
                <strong class="text-info" style="font-size: 16px;">ID: </strong>
                <strong style="font-size: 25px;">&nbsp;{{ $conta->id }}<strong>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <strong class="text-info" style="font-size: 16px;">Banco:</strong>
                <select name="codcliente" style="height:40px; width: 430px; font-size: 18px;" required>
                    <?php
                    foreach ($clientes as $cliente) {
                        if ($cliente->id == $conta->codcliente) {
                            echo '<option value="' . $cliente->id . '">' . $cliente->nome . '</option>';
                        }
                    }
                    ?>
                    @foreach($clientes as $cliente)
                    <option value=" {{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <strong class="text-info" style="font-size: 16px;">Cliente:</strong>
                <select name="codbanco" style="height:40px; width: 430px; font-size: 18px;" required>
                    <?php
                    foreach ($bancos as $banco) {
                        if ($banco->id == $conta->codbanco) {
                            echo '<option value="' . $banco->id . '">' . $banco->descricao . '</option>';
                        }
                    }
                    ?>
                    @foreach($bancos as $banco)
                    <option value=" {{ $banco->id }}">{{ $banco->descricao }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="field">
            <strong class="text-info" style="font-size: 16px;">Saldo:</strong>
            <div class="control">
                <input type="number" name="saldo" value="{{ $conta->saldo }}" style="height:40px; width: 430px; font-size: 18px;" required>
            </div>
        </div>
        <div style="float: right;">
            <a class="btn btn-outline-danger" href="{{ route('contas.index') }}">voltar</a>
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection
