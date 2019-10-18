class Cart {
    constructor(content) {
        this.content = content
    }

    add(product) {
        return axios.post(`/cart/${product.id}`)
            .then(({data}) => {
            console.log(data)
                this.content = data.cart
                flash(data.message)
            })
            .catch(() => flash('opps somthing gose wrong ...'))
    }
}
;

export default Cart;