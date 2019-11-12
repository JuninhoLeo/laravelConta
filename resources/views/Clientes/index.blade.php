@extends('layout')
@section('content')

<div class="container col-md-8">
    <a href="" class="btn btn-info" style="margin:10px;" data-toggle="modal" data-target="#exampleModal">Novo Cliente</a>
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
                <td>{{ $cliente->data_cadastro }}</td>
                <td>
                    <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                        <a class="btn btn-warning" href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalMostrar" data-whatever="{{ $cliente->id }}" data-whatevernome="{{ $cliente->nome }}" data-whateverdata="{{ $cliente->data_cadastro }}">Mostar</button>
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>


    <!-------------------------------------------------------------------------------------------->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-notify model-lg model-right model-success" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('clientes.store') }}">
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="form-group col-md-7">
                                <label for="nome">Nome:</label>
                                <input type="text" id="nome" name="nome">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="text">Data Cadastro:</label>
                                <input type="date" name="data_cadastro">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-------------------------------------------------------------------------------------------->
    <!-- Modal Mostar -->

    <div class="modal fade" id="ModalMostrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nova mensagem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- <div class="form-group">
                            <label for="recipient-name" class="col-form-label">id:</label>
                            <input type="text" class="form-control" id="id_cliente" name="id" disabled>
                        </div> -->
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nome:</label>
                            <input type="text" class="form-control" id="nome_cliente" disabled>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Data do Cadastro:</label>
                            <input type="date" class="form-control" id="cadastro" disabled></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#ModalMostrar').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Botão que acionou o modal
        var recipient = button.data('whatever') // Extrai informação dos atributos data-*
        var recipientnome = button.data('whatevernome') // Extrai informação dos atributos data-*
        var recipientdata = button.data('whateverdata') // Extrai informação dos atributos data-*
        // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
        // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
        var modal = $(this)
        modal.find('.modal-title').text('Cliente id: ' + recipient)
        modal.find('#id_cliente').val(recipient)
        modal.find('#nome_cliente').val(recipientnome)
        modal.find('#cadastro').val(recipientdata)
    })
</script>

</div>

@endsection
