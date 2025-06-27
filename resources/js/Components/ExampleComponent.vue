<template>
    <div>
        <!-- Conteúdo do componente -->
    </div>
</template>

<script>
export default {
    name: 'ExampleComponent',

    props: {
        // props aqui
    },

    emits: [
        // eventos emitidos aqui
    ],

    data() {
        return {
            // dados reativos
        };
    },

    computed: {
        // propriedades computadas
    },

    watch: {
        // observadores de mudanças
    },

    methods: {
        // métodos comuns
        exemploMetodo() {
            console.log('Método exemplo chamado');
        }
    },

    mounted() {
        // chamado quando o componente é montado
        console.log('ExampleComponent montado');
    },

    created() {
        // chamado quando o componente é criado
        console.log('ExampleComponent criado');
    },

    updated() {
        // chamado quando o componente é atualizado
        console.log('ExampleComponent atualizado');
    },

    unmounted() {
        // chamado quando o componente é destruído
        console.log('ExampleComponent destruído');
    }
};
</script>

<style scoped></style>
