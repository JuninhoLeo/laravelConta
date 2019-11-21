@extends('layouts.app')
@section('content')

<div class="container col-md-7">
    <a href="{{ route('bancos.create') }}" class="btn btn-outline-info" style="margin:10px; float: right;">Novo Banco</a>
    @if($message = Session::get('success'))
    <div class="container">
        <div class="col-md-7">
            <div class="alert-box success">
                <p><b> {{ $message }}</b></p>
            </div>
        </div>
    </div>
    @endif
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descrição</th>
                <th scope="col" colspan="3"></th>
            </tr>
        </thead>
        @foreach($bancos as $banco)
        <tbody>
            <tr>
                <th scope="row">{{ $banco->id }}</th>
                <td>{{ $banco->descricao }}</td>
                <td style="float: right;">
                    <form action="{{ route('bancos.destroy',$banco->id) }}" method="POST">
                        <a class="btn btn-warning" href="{{ route('bancos.edit', $banco->id) }}">Editar</a>
                        <a class="btn btn-success" href="{{ route('bancos.show', $banco->id) }}">Mostar</a>
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <center>
        <div class="col-md-2">
            {{ $bancos->links() }}
        </div>
    </center>
</div>
@endsection
