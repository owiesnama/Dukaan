class Cart {
    constructor(content) {
        this.content = content
    }

    static add(product) {
        return axios.post(`/cart/${product.id}`)
            .then(({data}) => {
            console.log(data)
                this.content = data.cart
                events.$emit('cart:updated',this.content)
                flash(data.message)
            })
            .catch(() => flash('opps somthing gose wrong ...'))
    }
}
;

export default Cart;