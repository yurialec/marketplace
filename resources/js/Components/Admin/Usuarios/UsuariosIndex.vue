<template>
    <div class="card">
        <div class="card-header py-3">
            <div class="container-fluid">
                <div class="row align-items-center g-2">
                    <div class="col-12 col-md-3 text-md-start text-center">
                        <h5 class="mb-0">Usuários</h5>
                    </div>
                    <div class="col-12 col-md-6">
                        <form>
                            <input type="text" class="form-control form-control-sm" placeholder="Pesquisar usuários...">
                        </form>
                    </div>
                    <div class="col-12 col-md-3 text-md-end text-center">
                        <div
                            class="d-flex flex-column flex-md-row justify-content-center justify-content-md-end gap-2 mt-2 mt-md-0">
                            <button class="btn btn-primary btn-sm">
                                Cadastrar
                            </button>
                            <button class="btn btn-success btn-sm">
                                CSV
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-hover align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First</th>
                            <th>Last</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td class="text-center">
                                <div class="d-flex flex-column flex-md-row justify-content-center gap-1">
                                    <button class="btn btn-link btn-sm text-dark" title="Visualizar">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-link btn-sm text-warning" title="Editar">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-link btn-sm text-danger" title="Excluir">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td class="text-center">
                                <div class="d-flex flex-column flex-md-row justify-content-center gap-1">
                                    <button class="btn btn-link btn-sm text-dark" title="Visualizar">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-link btn-sm text-warning" title="Editar">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-link btn-sm text-danger" title="Excluir">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Larry the Bird</td>
                            <td>@twitter</td>
                            <td class="text-center">
                                <div class="d-flex flex-column flex-md-row justify-content-center gap-1">
                                    <button class="btn btn-link btn-sm text-dark" title="Visualizar">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-link btn-sm text-warning" title="Editar">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-link btn-sm text-danger" title="Excluir">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer py-2">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-auto">
                        <nav aria-label="Paginação">
                            <ul class="pagination pagination-sm justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Próximo</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'UsuariosIndex', // Nome do componente
    data() {
        return {
            // Seus dados reativos
        };
    },
    mounted() {
        console.log('componente usuarios');

    },
    methods: {
        // Seus métodos
    }
};
</script>