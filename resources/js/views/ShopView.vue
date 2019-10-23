<script>
    export default{
        props:['cart'],
        methods: {
            addToCart(product){
                this.cart.add(product)
            }

        }
    }
</script>
