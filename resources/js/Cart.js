class Cart {
    constructor() {
        this.content = {}
    }

    init() {
        return axios.get('/cart')
            .then(({data}) => {
                this.content = data.cart
                Events.fire('cart:initialized', this.content)
            })
    }

    contents() {
        return this.content
    }

    add(product) {
        return axios.post(`/cart/${product.id}`)
            .then(({data}) => {
                this.content = data.cart
                flash(data.message)
                Events.fire('cart:updated', this.content)
            })
            .catch(() => flash('opps somthing gose wrong ...'))
    }

    remove(product){
        return axios.delete(`/cart/${product.rowId}`)
            .then(({data}) => {
                this.content = data.cart
                Events.fire('cart:item-removed', this.content)
                Events.fire('cart:updated', this.content)
            })
            .catch(() => flash('opps somthing gose wrong ...'))
    }
}


export default Cart;