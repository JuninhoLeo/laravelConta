@extends('layouts.app')
@section('content')

<div class="container col-md-4">
    <br>
    <form action="{{ route('bancos.update', $banco->id ) }}" method="post">
        @csrf
        @method('PUT')
        <div class="field">
            <div class="form-group">
                <strong>ID: </strong>{{ $banco->id }}
            </div>
        </div>
        <div class="field">
            <strong>Descrição:</strong>
            <div class="control">
                <input class="input" type="text" name="descricao" value="{{ $banco->descricao }}" style="height:40px; width: 430px; font-size: 18px;" required>
            </div>
        </div>
        <div style="float: right;">
            <a class="btn btn-outline-danger" href="{{ route('bancos.index') }}">voltar</a>
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection
