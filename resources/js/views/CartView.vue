<script>
    export default{
        data(){
            return {
                content: cart.contents()
            }
        },

        methods:{
            removeProduct(product){
                cart.remove(product)
            },

            updateProduct(product){
                cart.update(product)
            },
            size(object){
                return _.size(object)
            },
        },

        created(){
            Events.on(['cart:initialized', 'cart:updated'], content => {
                this.content = content
            })
        }
    }
</script>
