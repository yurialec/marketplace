<template>
    <div class="card">
        <div class="card-header py-3">
            <div class="container-fluid">
                <div class="row align-items-center g-2">
                    <div class="col-12 col-md-3 text-md-start text-center">
                        <h5 class="mb-0">Usuários</h5>
                    </div>
                    <div class="col-12 col-md-6">
                        <form @submit.prevent="find()" class="input-group">
                            <input v-model="termoBusca" type="text" class="form-control form-control-sm"
                                placeholder="Pesquisar usuários...">
                            <button class="btn btn-outline-primary btn-sm" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
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
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Criado</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="usuario in usuarios.data" :key="usuario.id">
                            <td>{{ usuario.name }}</td>
                            <td>{{ usuario.email }}</td>
                            <td>{{ formatarData(usuario.created_at) }}</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-link text-warning me-2" title="Editar usuário"
                                    @click="editarUsuario(usuario)">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-sm btn-link text-danger" title="Excluir usuário"
                                    @click="excluirUsuario(usuario)">
                                    <i class="bi bi-trash"></i>
                                </button>
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
                        <nav>
                            <ul class="pagination">
                                <li v-for="(link, index) in usuarios.links" :key="index"
                                    :class="['page-item', { active: link.active, disabled: !link.url }]">
                                    <a class="page-link" href="#" v-html="link.label"
                                        @click.prevent="pagination(link.url)"></a>
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
import axios from 'axios';

export default {
    name: 'UsuariosIndex',
    data() {
        return {
            loading: false,
            usuarios: {
                data: [],
                links: []
            },
            termoBusca: ''
        };
    },
    mounted() {
        this.find();
    },
    methods: {
        find(url = '/admin/usuarios/listar') {
            this.loading = true;
            axios.get(url, { params: { search: this.termoBusca } })
                .then((response) => {
                    this.usuarios = response.data;
                })
                .catch((error) => {
                    console.error(error);
                })
                .finally(() => {
                    this.loading = false;
                });
        },
        pagination(url) {
            if (url) {
                this.find(url);
            }
        },
        formatarData(data) {
            const d = new Date(data);
            return d.toLocaleDateString('pt-BR') + ' ' + d.toLocaleTimeString('pt-BR');
        },
        editarUsuario(usuario) {
            window.location.href = `/admin/usuarios/${usuario.id}/editar`;
        },
        excluirUsuario(usuario) {
            if (confirm(`Deseja realmente excluir o usuário "${usuario.name}"?`)) {
                axios.delete(`/admin/usuarios/${usuario.id}`)
                    .then(() => {
                        this.find();
                    })
                    .catch((error) => {
                        console.error('Erro ao excluir usuário:', error);
                    });
            }
        }
    }
};
</script>