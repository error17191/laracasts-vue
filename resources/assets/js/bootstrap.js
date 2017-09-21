
import Vue from 'vue';

window.Vue = Vue;
import VueRouter from 'vue-router';

Vue.use(VueRouter);


import axios from 'axios';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
