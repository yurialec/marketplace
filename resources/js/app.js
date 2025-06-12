import './bootstrap';
import '../css/app.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle';
import 'bootstrap-icons/font/bootstrap-icons.css';
import '@fortawesome/fontawesome-free/css/all.min.css';

import { createApp, defineAsyncComponent } from 'vue';
import WidgetPlugin from './plugins/widget';

const app = createApp({});

app.use(WidgetPlugin);

const components = import.meta.glob('./Components/**/*.vue');
for (const [path, definition] of Object.entries(components)) {
    const name = path.split('/').pop().replace(/\.\w+$/, '');
    app.component(name, defineAsyncComponent(definition));
}

app.mount('#app');

document.getElementById('sidebarToggle')?.addEventListener('click', () => {
    document.body.classList.toggle('sb-sidenav-toggled');
});
