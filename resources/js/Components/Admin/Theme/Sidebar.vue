<template>
    <div class="sb-sidenav-menu">
        <div class="nav" v-for="item in items" :key="item.nome">
            <a class="nav-link" :href="item.url">
                <div class="sb-nav-link-icon">
                    <i :class="item.icone"></i>
                </div>
                {{ item.label }}
            </a>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: {
    },
    data() {
        return {
            items: [],
        };
    },
    mounted() {
        this.getSidebar();
    },
    methods: {
        getSidebar() {
            axios.get('/admin/sidebar')
                .then(response => {
                    this.items = response.data;
                })
                .catch(errors => {
                })
                .finally(() => {
                });
        }
    }
};
</script>