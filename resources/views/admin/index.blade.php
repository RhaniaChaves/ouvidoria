<x-app-layout>
    <div class="container my-5">
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <th>Código de rastreio</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Categoria</th>
                        <th>Data de envio</th>
                        <th>Nome do autor</th>
                        <th>Tipo de usuário</th>
                        <th>Status atual</th>
                        <th>Mudar status</th>
                        <th>Excluir</th>
                    </thead>
                    <tbody>
                        @foreach($manifestacoes as $manifestacao)
                            <tr>
                                <td>{{ $manifestacao->codigo_rastreio }}</td>
                                <td>{{ $manifestacao->titulo }}</td>
                                <td>{{ $manifestacao->descricao }}</td>
                                <td>{{ $manifestacao->categoria }}</td>
                                <td>{{ $manifestacao->data_envio }}</td>
                                <td>{{ $manifestacao->nome_autor }}</td>
                                <td>{{ ucwords($manifestacao->tipo_usuario) }}</td>
                                <td>{{ $manifestacao->status == 'concluida' ? 'Concluída' : ucwords($manifestacao->status) }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning w-100" data-bs-toggle="modal" data-bs-target="#modalEditar-{{ $manifestacao->id }}">
                                        Alterar Status
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalEditar-{{ $manifestacao->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar status</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('manifestacao.update', $manifestacao->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="">Selecione o status da manifestação</label>
                                                                <select name="status" class="form-select">
                                                                    <option value="aberta">Aberta</option>
                                                                    <option value="encaminhada">Encaminhada</option>
                                                                    <option value="concluida">Concluída</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row my-3">
                                                            <div class="col-md-12">
                                                                <button class="btn btn-success w-100">Salvar</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <form action="{{ route('manifestacao.delete', $manifestacao->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger w-100">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>