/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vuesax from 'vuesax';
import 'vuesax/dist/vuesax.css'; //Vuesax styles
import 'material-icons/iconfont/material-icons.css';
// import 'vuesax/dist/style/vuesax.styl';
require('./bootstrap');

window.Vue = require('vue');
Vue.use(Vuesax, {
    theme:{
        colors:{
            primary:'#5b3cc4',
            success:'rgb(23, 201, 100)',
            danger:'rgb(242, 19, 93)',
            warning:'rgb(255, 130, 0)',
            dark:'rgb(36, 33, 69)'
        }
    }
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data:{
        MySql: {

        }
    },
    methods: {
        getMysql(url, attachTo,params = null) {
            let vm = this;
            return new Promise((resolve, reject) => {
                return axios.get(url,{params: params})
                    .then((res) => resolve(vm.MySql[attachTo] = res.data))
                    .catch(error => reject(console.log(error)));
            });
        },
    }
});
