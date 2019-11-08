@extends('layout')
@section('content')

<div class="container">
    <form id="createBanco" name="createBanco" method="POST" action="/bancos">
        {{ csrf_field() }}
        <div class="form-group col-md-7">
            <label for="descricao">Descricao:</label>
            <input type="text" id="descricao" name="descricao">
            <input type="submit" class="btn btn-success" id="btnGvr" value="Gravar">
            <input type="reset" class="btn btn-warning" id="btnRes" value="Limpar">
        </div>
    </form>

</div>

@endsection
