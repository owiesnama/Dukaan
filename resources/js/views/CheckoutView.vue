<script>
    export default{
        data() {
            return {
                checkout_method: 'guest',
                show_email: false,
            }
        },
        methods: {
            onMethodChange() {
                if (this.checkout_method == 'register') {
                    this.show_email = true
                } else {
                    this.show_email = false
                }
            }
        }
    }
</script>
