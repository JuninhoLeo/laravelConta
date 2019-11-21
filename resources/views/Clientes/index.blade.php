@extends('layouts.app')
@section('content')

<div class="container col-md-8">
    <a href="{{ route('clientes.create') }}" class="btn btn-outline-info" style="margin:10px; float: right;">Novo Cliente</a>
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
                <th scope="col">Nome</th>
                <th scope="col">Data Cadastro</th>
                <th scope="col" colspan="3"></th>
            </tr>
        </thead>

        @foreach($clientes as $cliente)
        <tbody>
            <tr>
                <td scope="row">{{ $cliente->id }}</td>
                <td>{{ $cliente->nome }}</td>

                <?php $date = new DateTime($cliente->data_cadastro);
                $dataInput =  $date->format('d/m/Y'); ?>

                <td>{{ $dataInput }}</td>
                <td style="float: right;">
                    <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                        <a class="btn btn-warning" href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                        <a class="btn btn-success" href="{{ route('clientes.show', $cliente->id) }}">Mostar</a>
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
            {{ $clientes->links() }}
        </div>
    </center>
</div>

@endsection
