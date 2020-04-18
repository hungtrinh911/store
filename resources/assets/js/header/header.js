require('./../bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './../App.vue';
Vue.use(VueAxios, axios);


Vue.component('top-bar', require('./topBar.vue'));
Vue.component('search-bar', require('./searchBar.vue'));
Vue.component('category-bar', require('./categoryBar.vue'));
Vue.component('register-pop-up', require('./registerPopUp.vue'));
Vue.component('login-pop-up', require('./loginPopUp.vue'));
Vue.component('select-location-pop-up', require('./selectLocationPopUp.vue'));

const app = new Vue(Vue.util.extend()).$mount('#app');
Vue.config.errorHandler = function(err, vm, info) {
  console.log(`Error: ${err.toString()}\nInfo: ${info}`);
}