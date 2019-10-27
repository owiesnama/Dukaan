class Cart {
    /**
     *
     */
    constructor() {
        this.content = {}
    }
    /**
     *
     * @returns {Promise.<TResult>|*|Promise<V|U>|Promise<U>}
     */
    init() {
        return axios.get('/cart')
            .then(({data}) => {
                this.content = data.cart
                Events.fire('cart:initialized', this.content)
            })
    }
    /**
     *
     * @returns {*|Cart|{}}
     */
    contents() {
        return this.content
    }
    /**
     *
     * @param product
     * @returns {Promise<U>|Promise.<T>}
     */
    add(product) {
        return axios.post(`/cart/${product.id}`)
            .then(({data}) => {
                this.content = data.cart
                flash(data.message)
                Events.fire('cart:updated', this.content)
            })
            .catch(() => flash('عذرا هنالك خطأ ما...'))
    }
    /**
     *
     * @param product
     * @returns {Promise.<TResult>}
     */
    update(product) {
        return axios.put(`/cart/${product.rowId}`,{qty:product.qty})
            .then(({data}) => {
                this.content = data.cart
                Events.fire('cart:item-updated', product)
                Events.fire('cart:updated', this.content)
            })
            .catch(() => flash('عذرا هنالك خطأ ما...'))
    }
    /**
     *
     * @param product
     * @returns {Promise<U>|Promise.<T>}
     */
    remove(product){
        return axios.delete(`/cart/${product.rowId}`)
            .then(({data}) => {
                this.content = data.cart
                Events.fire('cart:item-removed', this.content)
                Events.fire('cart:updated', this.content)
            })
            .catch(() => flash('عذرا هنالك خطأ ما...'))
    }
}


export default Cart;