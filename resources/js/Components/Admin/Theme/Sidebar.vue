<template>
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div v-for="(item, index) in itens" :key="index">
                <div v-if="!item.filhos || item.filhos.length === 0">
                    <a class="nav-link" :href="item.url">
                        <div class="sb-nav-link-icon"><i :class="item.icone"></i></div>
                        {{ item.label }}
                    </a>
                </div>
                <div v-else>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" :data-bs-target="'#collapse-' + item.nome" aria-expanded="false" :aria-controls="'collapse-' + item.nome">
                        <div class="sb-nav-link-icon"><i :class="item.icone"></i></div>
                            {{ item.label }}
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" :id="'collapse-' + item.nome" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" v-for="(filho, fIndex) in item.filhos" :key="fIndex" :href="filho.url">
                                {{ filho.label }}
                            </a>
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
    name: 'Sidebar',
    data() {
        return {
            loading: false,
            itens: [],
        };
    },
    created() {
    },
    mounted() {
        this.getSidebar();
    },
    methods: {
        getSidebar() {
            this.loading = true;
            axios.get('/admin/sidebar')
                .then((response) => {
                    this.itens = response.data;
                })
                .catch(errors => {
                    console.log(errors);
                })
                .finally(() => {
                    this.loading = false;
                });
        }
    },
}
</script>
