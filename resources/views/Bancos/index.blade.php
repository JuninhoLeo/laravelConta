@extends('layout')
@section('content')

<div class="container col-md-7">
    <a href="" class="btn btn-info" style="margin:10px;" data-toggle="modal" data-target="#ModalNovo">Novo Banco</a>
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
                <td>{{ $banco->descricao }}</th>
                <td>
                    <form action="{{ route('bancos.destroy',$banco->id) }}" method="POST">
                        <a class="btn btn-warning" href="{{ route('bancos.edit', $banco->id) }}">Editar</a>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="{{ $banco->id }}" data-whatevernome="{{ $banco->descricao }}">Mostar</button>
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
    <!-- Modal Novo -->
    <div class="modal fade" id="ModalNovo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input type="text" id="descricao" name="descricao" placeholder="Nome do Banco">
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Banco</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- <div class="form-group">
                            <label for="recipient-name" class="col-form-label">ID:</label>
                            <input type="text" class="form-control" id="id_banco" disabled>
                        </div> -->
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Nome:</label>
                            <textarea class="form-control" id="nome_banco" disabled></textarea>
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
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Botão que acionou o modal
        var recipient = button.data('whatever') // Extrai informação dos atributos data-*
        var recipientnome = button.data('whatevernome') // Extrai informação dos atributos data-*
        // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
        // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
        var modal = $(this)
        modal.find('.modal-title').text('Banco id: ' + recipient)
        modal.find('#id_banco').val(recipient)
        modal.find('#nome_banco').val(recipientnome)
    })
</script>

@endsection
