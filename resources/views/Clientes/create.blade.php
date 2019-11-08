@extends('layout')
@section('content')

<div class="container">
    <form id="createBanco" name="createBanco" method="POST" action="/clientes">
        {{ csrf_field() }}
        <div class="col-md-12">
            <div class="form-group col-md-7">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="form-group col-md-7">
                <label for="data">Data Cadastro:</label>
                <input type="date" id="data" name="data">
            </div>
            <input type="submit" class="btn btn-success" id="btnGvr" value="Gravar">
            <input type="reset" class="btn btn-warning" id="btnRes" value="Limpar">
        </div>
    </form>

</div>
