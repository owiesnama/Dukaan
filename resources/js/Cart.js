class Cart {
    constructor(content) {
        this.content = content
    }
    static init(){
        return axios.get('/cart')
            .then(({data})=> {
                this.content = data.cart
            })
    }

    static contents() {
        return this.content
    }

    static add(product) {
        return axios.post(`/cart/${product.id}`)
            .then(({data}) => {
                this.content = data.cart
                flash(data.message)
                fire('cart:updated',this.content)
            })
            .catch(() => flash('opps somthing gose wrong ...'))
    }
}


export default Cart;