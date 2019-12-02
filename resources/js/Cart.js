class Cart {
    /**
     *
     */
    constructor() {
        this.content = {}
        this.total = 0
    }
    /**
     *
     * @returns {Promise.<TResult>|*|Promise<V|U>|Promise<U>}
     */
    init() {
        return axios.get('/cart')
            .then(({data}) => {
                this.content = data.cart
                this.calculateTotal()
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
                this.calculateTotal()
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
                this.calculateTotal()
                console.log(this.total)
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
                this.calculateTotal()
                Events.fire('cart:item-removed', this.content)
                Events.fire('cart:updated', this.content)
            })
            .catch(() => flash('عذرا هنالك خطأ ما...'))
    }


    calculateTotal(){
        this.total = Object.values(this.content).reduce((total, currentValue)=>{
           return ((parseFloat(currentValue.price) * parseFloat(currentValue.qty)) + parseFloat(total)).toFixed(2)
        }, 0)
    }
}


export default Cart;