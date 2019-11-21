@extends('layouts.app')
@section('content')

<div class="container col-md-4">
    <form id="createBanco" name="createBanco" method="POST" action="/clientes">
        {{ csrf_field() }}
        <label for="nome" class="text-info" style="font-size: 16px;">Nome:</label>
        <br>
        <div class="form-row">
            <div class="form-group">
                <input type="text" id="nome" name="nome" style="height:40px; width: 430px; font-size: 18px;" placeholder="Nome do Cliente" required>
            </div>
        </div>
        <label for=" data" class="text-info" style="font-size: 16px;">Data Cadastro:</label>
        <br>
        <div class="form-row">
            <div class="form-group">
                <input type="date" id="data" name="data_cadastro" style="height:40px; width: 430px; font-size: 18px;" required>
            </div>
        </div>
        <div align="right">
            <a class="btn btn-danger" href="{{ route('clientes.index') }}">Voltar</a>
            <button type="reset" class="btn btn-warning">Limpar</button>
            <button type="submit" class="btn btn-success  btn-lg">Salvar</button>
        </div>
    </form>
</div>
@endsection
