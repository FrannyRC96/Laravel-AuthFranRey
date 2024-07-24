import { createApp } from 'vue';
import axios from 'axios';
import router from './router';
import 'bootstrap/dist/js/bootstrap.bundle.min';


import LoginComponent from './components/LoginComponent.vue';

axios.defaults.baseURL = '/api';
axios.defaults.headers.common['Authorization'] = `Bearer ${localStorage.getItem('token')}`;

const app = createApp({});

app.component('login-component', LoginComponent);

app.use(router);


app.mount('#app');
