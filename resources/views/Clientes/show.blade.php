@extends('layouts.app')
@section('content')

<div class="container col-md-4">
    <div class="field">
        <div class="form-group">
            <strong class="text-info" style="font-size: 16px;">ID: </strong>
            <strong style="font-size: 25px;">&nbsp;{{ $cliente->id }}<strong>
        </div>
    </div>
    <div class="field">
        <div class="form-group">
            <strong class="text-info" style="font-size: 16px;">Nome: </strong>
            <br>
            <strong style="font-size: 25px;">&nbsp;&nbsp;&nbsp;&nbsp;{{ $cliente->nome }}</strong>
        </div>
    </div>
    <div class="field">
        <div class="form-group">
            <strong class="text-info" style="font-size: 16px;">Data Cadastro: </strong>
            <br>
            <?php
            $date = new DateTime($cliente->data_cadastro);
            $dataInput =  $date->format('d/m/Y');
            ?>
            <strong style="font-size: 25px;">&nbsp;&nbsp;&nbsp;&nbsp;{{ $dataInput }}</strong>
        </div>
    </div>
    <div align="right">
        <a class="btn btn-outline-danger" href="{{ route('clientes.index') }}">voltar</a>
    </div>
</div>
@endsection
