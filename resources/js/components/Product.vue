<template>
    <div class="category">
        <div class="ht__cat__thumb">
            <a :href="'/products/'+product.id ">
                <img height="150px" width="100px" :src="product.thumbnail" :alt="product.description">
            </a>
        </div>
        <div class="fr__hover__info">
            <ul class="product__action">
                <li><a href="#" @click.prevent="addToCart(product)"><i
                        class="icon-handbag icons"></i></a>
                </li>
            </ul>
        </div>
        <div class="fr__product__inner">
            <h4><a :href="'/products/'+product.id" v-text="product.name"></a></h4>
            <ul class="fr__pro__prize">
                <li v-text="parseFloat(product.price).toFixed(2) + ' SDG'"></li>
            </ul>
        </div>
    </div>
</template>
<script>
    export default{
        props: ['product'],

        methods: {
            addToCart(product){
                cart.add(product)
            }
        }
    }
</script>