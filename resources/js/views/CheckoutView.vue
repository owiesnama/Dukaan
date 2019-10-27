
<script>
    export default{
        data() {
            return {
                cartContent: cart.contents(),
                checkout_method: 'guest',
                show_email: false,
            }
        },
        methods: {
            removeProduct(product){
                cart.remove(product)
            },

            updateProduct(product){
                cart.update(product)
            },
            size(object){
                return _.size(object)
            },
            onMethodChange() {
                if (this.checkout_method == 'register') {
                    this.show_email = true
                } else {
                    this.show_email = false
                }
            }
        },

        created(){
            Events.on(['cart:initialized', 'cart:updated'], content => {
                this.cartContent = content
            })
        }
    }
</script>
