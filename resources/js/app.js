/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Cart from "./Cart";
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


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#app',
    data: {
        cart: Cart,
        cartContent: Cart.contents(),
        cartItemsCount: 0,
    },
    methods: {
        size(object){
            return _.size(object)
        },

        initializeLozad(){
            lozad('.lozad', {
                load: function (el) {
                    el.src = el.dataset.src;
                    el.onload = function () {
                        el.classList.add('fade')
                    }
                }
            }).observe()
        }
    },
    mounted(){
        console.log(Cart.contents())

        this.cartItemsCount = this.size(this.cart.contents())
        window.events.$on('cart:updated', (content) => {
            this.cartItemsCount = this.size(content)
        })
    },
    created(){
        Cart.init()
        this.initializeLozad()
        console.log(lozad)
    }
});
