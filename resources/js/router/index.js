import { createRouter, createWebHistory } from 'vue-router';
import LoginComponent from '../components/LoginComponent.vue';
import AdminDashboard from '../components/AdminDashboard.vue';

const routes = [
    { path: '/login', component: LoginComponent },
    { path: '/admin', component: AdminDashboard },
    { path: '/', redirect: '/login' }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
