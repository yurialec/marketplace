@extends('clientes.layouts.app_cliente')
@section('content')
    <div class="row m-3">
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">Meus dados</h5>
                        <div class="alert alert-warning p-2 mb-0 d-flex align-items-center">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <span>Finalize seu cadastro</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Email:</strong> email@email.com</p>
                            <p><strong>CPF/CNPJ:</strong> 123.456.789-00</p>
                            <p><strong>Nome Completo:</strong> Yuri Alec</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Telefone:</strong> (61) 994202105</p>
                            <p><strong>Sexo:</strong> Masculino</p>
                            <p><strong>Data de Nascimento:</strong> 07/05/1991</p>
                            <p><strong>Novidades:</strong> Não</p>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alterarInformacoesModal">
                            <i class="bi bi-pencil-fill me-2"></i>Alterar minhas informações
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card m-1">
                <div class="card-body">
                    <h5>Endereço para entrega</h5>
                    <p class="endereco-hover" style="cursor: pointer;" data-bs-toggle="modal"
                        data-bs-target="#alterarEnderecoModal">
                        SCS Quadra 7, Bloco A, Asa Sul, 70307-902, Brasília - DF
                    </p>
                </div>
            </div>
            <div class="card m-1">
                <div class="card-body">
                    <h5>Meus Pedidos</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Produto</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Data de enrga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center pagination-sm">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para alterar informações -->
    <div class="modal fade" id="alterarInformacoesModal" tabindex="-1" aria-labelledby="alterarInformacoesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alterarInformacoesModalLabel">Alterar minhas informações</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="nomeCompleto" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="nomeCompleto" value="Yuri Alec">
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="telefone" value="(61) 994202105">
                        </div>
                        <div class="mb-3">
                            <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="dataNascimento" value="1991-05-07">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Receber novidades</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="novidades" id="novidadesSim">
                                <label class="form-check-label" for="novidadesSim">Sim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="novidades" id="novidadesNao" checked>
                                <label class="form-check-label" for="novidadesNao">Não</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Salvar alterações</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para alterar endereço -->
    <div class="modal fade" id="alterarEnderecoModal" tabindex="-1" aria-labelledby="alterarEnderecoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alterarEnderecoModalLabel">Alterar endereço de entrega</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="cep" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="cep" value="70307-902">
                        </div>
                        <div class="mb-3">
                            <label for="logradouro" class="form-label">Logradouro</label>
                            <input type="text" class="form-control" id="logradouro" value="SCS Quadra 7, Bloco A">
                        </div>
                        <div class="mb-3">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" value="Asa Sul">
                        </div>
                        <div class="mb-3">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" value="Brasília">
                        </div>
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <input type="text" class="form-control" id="estado" value="DF">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Salvar endereço</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .endereco-hover:hover {
            background-color: #f8f9fa;
            transition: background-color 0.3s ease;
        }
    </style>
@endsection