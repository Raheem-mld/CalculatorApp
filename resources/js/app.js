import { createApp } from 'vue';
import Calculator from './components/Calculator.vue';

const app = createApp({
    components: {
        Calculator,
    },
});

app.mount('#app');
