<template>
    <nav class="sb-sidenav accordion sb-sidenav-light mt-3" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <template v-for="(item, index) in items" :key="item.nome">
                    <!-- Item sem filhos -->
                    <a v-if="!item.filhos || item.filhos.length === 0" class="nav-link" :href="item.url">
                        <div class="sb-nav-link-icon">
                            <i :class="item.icone"></i>
                        </div>
                        {{ item.label }}
                    </a>

                    <!-- Item com filhos com toggle -->
                    <template v-else>
                        <div class="nav-link" @click="toggleMenu(index)" style="cursor: pointer;">
                            <div class="sb-nav-link-icon">
                                <i :class="item.icone"></i>
                            </div>
                            {{ item.label }}
                            <div class="sb-sidenav-collapse-arrow float-end">
                                <i :class="item.expandido ? 'fas fa-angle-up' : 'fas fa-angle-down'"></i>
                            </div>
                        </div>
                        <transition name="slide">
                            <nav v-show="item.expandido" class="sb-sidenav-menu-nested nav">
                                <a v-for="filho in item.filhos" :key="filho.nome" class="nav-link" :href="filho.url">
                                    <span v-if="filho.icone">
                                        <i :class="filho.icone + ' me-2'"></i>
                                    </span>
                                    {{ filho.label }}
                                </a>
                            </nav>
                        </transition>
                    </template>
                </template>
            </div>
        </div>
    </nav>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            items: [],
        };
    },
    mounted() {
        this.getSidebar();
    },
    methods: {
        async getSidebar() {
            try {
                const response = await axios.get('/admin/sidebar');
                this.items = response.data.map(item => ({
                    ...item,
                    expandido: false,
                }));
            } catch (error) {
                console.error('Erro ao carregar sidebar:', error);
            }
        },
        toggleMenu(index) {
            this.items[index].expandido = !this.items[index].expandido;
        },
    },
};
</script>

<style scoped>
.sb-nav-link-icon {
    display: inline-block;
    margin-right: 0.5rem;
}

.sb-sidenav-menu-nested {
    margin-left: 1.5rem;
}

.slide-enter-active,
.slide-leave-active {
    transition: max-height 0.5s ease;
    overflow: hidden;
}

.slide-enter-from,
.slide-leave-to {
    max-height: 0;
}

.slide-enter-to,
.slide-leave-from {
    max-height: 500px;
}
</style>
