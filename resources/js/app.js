
require('./bootstrap');

window.Vue = require('vue').default;
import VueRouter from 'vue-router'
Vue.use(VueRouter)


import {routes} from './routes/routes.js';
const router = new VueRouter({
  routes,
  mode:'history',
});



const app = new Vue({
    el: '#app',
    router
});
