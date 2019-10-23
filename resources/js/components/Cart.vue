<template>
    <div class="shopping__cart">
        <div class="shopping__cart__inner">
            <div class="offsetmenu__close__btn">
                <a href="#"><i class="zmdi zmdi-close"></i></a>
            </div>
            <div class="shp__cart__wrap">
                <div v-for="product in initialContent"
                     :key="product.id"
                     class="shp__single__product">
                    <div class="shp__pro__thumb">
                        <a href="#">
                            <img src="/images/product-2/sm-smg/1.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="shp__pro__details">
                        <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                        <span class="quantity">الكمية:{{product.qty}}</span>
                        <span class="shp__price">السعر:{{product.price}}</span>
                    </div>
                    <div class="remove__btn">
                        <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                    </div>
                </div>
            </div>
            <ul class="shoping__total">
                <li class="subtotal">Subtotal</li>
                <li class="total__price"></li>
            </ul>
            <ul class="shopping__btn">
                <li><a href="/cart">{{lang('general.View Cart')}}</a></li>
                <li class="shp__checkout"><a href="/checkout">{{lang('general.Checkout')}}</a></li>
            </ul>
        </div>
    </div>
</template>
<script>
    export default{
        props:['initialContent'],

        data(){
          return{
              content:null
          }
        },

        mounted(){
            console.log(this.initialContent)
            this.content = this.initialContent
            console.log(this.content)
        },

        created(){

            this.$on('cart:updated', content => {
                console.log(content)
                this.content = content
            })
        }
    }
</script>