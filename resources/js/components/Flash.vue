<template>
    <div :class="classes"
         style="left: 25px; top: 50px;min-width: 250px;"
         role="alert"
         v-show="show"
         v-text="body">
    </div>
</template>

<script>
    export default {
        props: ['message'],

        data() {
            return {
                body: this.message,
                level: 'success',
                show: false
            }
        },

        computed: {
            classes() {
                let defaults = ['fixed','z-10', 'p-4', 'border', 'text-white','capitalize'];

                if (this.level === 'success') defaults.push('bg-pink-600',);
                if (this.level === 'warning') defaults.push('bg-yellow-600', 'border-yellow-900');
                if (this.level === 'danger') defaults.push('bg-red-600', 'border-red-900');

                return defaults;
            }
        },

        created() {
            if (this.message) {
                this.flash();
            }

            window.events.$on(
                'flash', data => this.flash(data)
            );
        },

        methods: {
            flash(data) {
                if (data) {
                    this.body = data.message;
                    this.level = data.level;
                }

                this.show = true;

                this.hide();
            },

            hide() {
                setTimeout(() => {
                    this.show = false;
                }, 3000);
            }
        }
    };
</script>
