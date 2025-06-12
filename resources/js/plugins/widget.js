// plugins/widget.js
import FloatingWidget from '@/Components/FloatingWidget.vue';
import { createApp } from 'vue';

export default {
    install(app) {
        const container = document.createElement('div');

        document.body.appendChild(container);

        const widgetApp = createApp(FloatingWidget);
        const widgetInstance = widgetApp.mount(container);

        app.config.globalProperties.$showWidget = (message, isSuccess = true) => {
            widgetInstance.show(message, isSuccess);
        };
    }
};
