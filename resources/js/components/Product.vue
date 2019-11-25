<template>
    <div class="category">
        <div class="ht__cat__thumb">
            <a :href="'/products/'+product.id ">
                <img class="lazy-load" height="150px" width="100px" :data-src="product.thumbnail" :alt="product.description">
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
    import lozad from 'lozad'

    export default{
        props: ['product'],

        methods: {
            addToCart(product){
                cart.add(product)
            }
        },
        mounted(){
            var elmts = document.querySelectorAll(".lazy-load");
            if (window.img_observer && window.img_observer.observer) {
                window.img_observer.observer.disconnect();
                delete window.img_observer;
                for (let i = 0, len = elmts.length; i < len; i++) {
                    // load image only when the image src is updated
                    const img = elmts[i].getAttribute('data-src') || false;
                    if (img &&
                        elmts[i].getAttribute('data-loaded') === 'true' &&
                        img !== elmts[i].getAttribute('src'))
                    {
                        elmts[i].setAttribute('data-loaded', false);
                    }
                }
            }
            window.img_observer = lozad(elmts);
            window.img_observer.observe();}
    }
</script>