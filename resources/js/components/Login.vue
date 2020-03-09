<script>
    export default {
        data() {
            return {
                form: {email: "", password: ""},
                feedback: "",
                loading: false
            };
        },
        methods: {
            login() {
                this.loading = true;
                axios
                    .post("/login", this.form, {
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        }
                    })
                    .then(() => location.reload())
                    .catch(error => {
                        this.feedback =
                            "البريد الإلكتروني او كلمة المرور صحيحة";
                        this.loading = false;
                    });
            },
            register() {
                this.$modal.hide("login");
                this.$modal.show("register");
            }
        }
    };
</script>