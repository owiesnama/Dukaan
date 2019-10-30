
<script>
    export default{
        data() {
            return {
                cartContent: cart.contents(),
                checkoutMethod: 'guest',
                showCredentials: false,
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
            addCredentialsFields() {
                this.showCredentials = this.checkoutMethod == 'register'
            }
        },

        created(){
            Events.on(['cart:initialized', 'cart:updated'], content => {
                this.cartContent = content
            })
        }
    }
</script>
