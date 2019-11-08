@extends('layout')
@section('content')


<a href="" class="btn btn-info" style="margin-left:82%" data-toggle="modal" data-target="#exampleModal">Novo Banco</a>

<div class="container">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
        </tr>

        @foreach($bancos as $banco)
        <tr>
            <th>{{ $banco->id }}</th>
            <th>{{ $banco->descricao }}</th>
        </tr>
        @endforeach
    </table>

    <!-------------------------------------------------------------------------------------------->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-notify model-lg model-right model-success" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo Banco</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('bancos.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="descricao">Descricao:</label>
                            <input type="text" id="descricao" name="descricao">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-------------------------------------------------------------------------------------------->

</div>

@endsection
