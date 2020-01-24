/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


import Welcome from "./components/Welcome";
import User from "./components/User";
import Dashboard from "./components/Dashboard";
import BaseCards from "./components/BaseCards";
import BaseCollapse from "./components/BaseCollapse";
import Vue from "vue";
import App from "./components/App";
import VueRouter from 'vue-router'
// import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

Vue.use(VueRouter)


// import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.min.js'
import JQuery from 'jquery'
window.$ = JQuery

const routes = [
    { path: '/', component: Welcome },
    { path: '/user', component: User },
    { path: '/dashboard', component: Dashboard },
    { path: '/base-cards', component: BaseCards },
    { path: '/base-collapse', component: BaseCollapse },
]

const router = new VueRouter({
    routes
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,               // <-- register router with Vue
    render: (h) => h(App) // <-- render App component
});
