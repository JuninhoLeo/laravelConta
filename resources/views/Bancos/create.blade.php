@extends('layouts.app')
@section('content')

<div class="container col-md-5">
    <form id="createBanco" name="createBanco" method="POST" action="/bancos">
        {{ csrf_field() }}
        <label for="descricao" class="text-info" style="font-size: 16px;">Nome:</label>
        <br>
        <div class="form-row">
            <div class="form-group">
                <input type="text" id="descricao" name="descricao" placeholder="Nome do banco" style="height:40px; width: 330px; font-size: 18px;" required>
            </div>
            <div align="right">
                <a class="btn btn-danger" href="{{ route('contas.index') }}">Voltar</a>
                <button type="reset" class="btn btn-warning">Limpar</button>
                <button type="submit" class="btn btn-success  btn-lg">Salvar</button>
            </div>
        </div>
    </form>
</div>
@endsection
