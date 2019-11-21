@extends('layouts.app')
@section('content')

<div class="container col-md-3">
    <div class="field">
        <div class="form-group">
            <strong class="text-info" style="font-size: 16px;">ID: </strong>
            <strong style="font-size: 25px;">{{ $banco->id }}<strong>
        </div>
    </div>
    <div class="field">
        <div class="form-group">
            <strong class="text-info" style="font-size: 16px;">Nome: </strong>
            <br>
            <strong style="font-size: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;{{ $banco->descricao }}</strong>
        </div>
    </div>
    <div align="right">
        <a class="btn btn-outline-danger" href="{{ route('bancos.index') }}">voltar</a>
    </div>
</div>

@endsection
