<template>
    <div class="widget-container">
        <transition name="fade">
            <div v-if="visible" :class="['floating-widget', type]">
                <i v-if="type === 'success'" class="bi bi-check2-circle" style="color: #2ed573;"></i>
                <i v-else class="bi bi-x-circle" style="color: #ff4757;"></i>
                <span>{{ message }}</span>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    data() {
        return {
            visible: false,
            message: '',
            type: ''
        };
    },
    methods: {
        show(message, isSuccess) {
            console.log('Mensagem recebida:', message); // debug
            this.message = message;
            this.type = isSuccess ? 'success' : 'error';
            this.visible = true;

            setTimeout(() => {
                console.log('Escondendo widget...');
                this.visible = false;
            }, 3000);
        }
    }
};
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}

.widget-container {
    position: fixed;
    top: 100px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 99999;
    background: rgba(0, 255, 0, 0.3);
    width: auto;
    pointer-events: none;
}

.floating-widget {
    background: red;
    padding: 20px;
    color: white;
    font-size: 18px;
    font-weight: bold;
    display: flex;
    gap: 10px;
    border: 2px solid black;
}

.success {
    border: 1px solid #2ed573;
}

.error {
    border: 1px solid #ff4757;
}
</style>
