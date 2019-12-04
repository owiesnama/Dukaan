/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import lozad from 'lozad'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */


const files = require.context('./views', true, /\.vue$/i)

files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('flash', require('./components/Flash.vue').default);
Vue.component('Cart', require('./components/Cart.vue').default);
Vue.component('Product', require('./components/Product.vue').default);
Vue.component('StarRating', require('./components/StarRating.vue').default);
Vue.component('Login', require('./components/Login.vue').default);
Vue.component('Register', require('./components/Registration.vue').default);

import vModal from 'vue-js-modal'
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(vModal);

const app = new Vue({
    el: '#app',
    data: {
        cartContent: cart.content,
    },

    computed: {
        cartItemsCount(){
            return this.size(this.cartContent)
        }
    },

    methods: {
        size(object){
            return _.size(object)
        },
    },

    mounted(){
        lozad(document.querySelectorAll("img")).observe();
    },

    created(){
        Events.on(['cart:initialized', 'cart:updated'], content => {
            this.cartContent = content
        })
    }
});
