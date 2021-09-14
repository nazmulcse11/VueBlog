
require('./bootstrap');

//Vue Js
window.Vue = require('vue').default;

//Vue Router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import {routes} from './routes/routes.js';
const router = new VueRouter({
  routes,
  mode:'history',
});

// V Form
import Form from 'vform';
window.Form = Form;

//sweetalert 2
import Swal from 'sweetalert2';
window.Swal = Swal;

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
window.Toast = Toast;



const app = new Vue({
    el: '#app',
    router
});
