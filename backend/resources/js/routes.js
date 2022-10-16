import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import App from './App.vue';
const routes = [
    {
        path: '/',
        name: 'home',
        component: App,
    },
];

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

export default router;
