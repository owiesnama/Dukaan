<modal name="register"
       classes=""
       width="100%"
       height="100%"
       :pivot-y="0.5">
    <div class="bg-white w-1/2 mx-auto mt-auto p-8 rounded pin-center">
        <div class="checkout-method__login">
            <login inline-template>
                <form action="/login" method="post">
                    <h5 class="checkout-method__title text-xl mb-4">@lang('checkout.Login')</h5>

                    <div class="single-input mb-2">
                        <label for="user-email">@lang('general.Name')</label>
                        <input class="px-2 py-4 border border-solid border-gray-400"
                               v-model="form.email"
                               type="name"
                               id="user-email">
                    </div>

                    <div class="single-input mb-2">
                        <label for="user-email">@lang('checkout.Email Address')</label>
                        <input class="px-2 py-4 border border-solid border-gray-400"
                               v-model="form.email"
                               type="email"
                               id="user-email">
                    </div>
                    <div class="single-input mb-8">
                        <label for="user-pass">@lang('checkout.Password')</label>
                        <input class="px-2 py-4 border border-solid border-gray-400"
                               v-model="form.password"
                               type="password"
                               id="user-pass">
                    </div>

                    <div class="single-input mb-8">
                        <label for="user-pass">@lang('general.Password confirmation')</label>
                        <input class="px-2 py-4 border border-solid border-gray-400"
                               v-model="form.password"
                               type="password"
                               id="user-pass">
                    </div>

                    <p class="my-2 text-red-500" v-text="feedback"></p>
                    <div class="flex justify-between items-center">
                        <div class="fr__btn">
                            <a href="#"
                               :class="loading ? 'loader': 'text-white' "
                               @click.prevent="login"
                            >@lang('checkout.Login')</a>
                        </div>

                        <div class="gray-btn">
                            <a href="#" @click.prevent="$modal.hide('login')">@lang('general.Close')</a>
                        </div>

                    </div>
                </form>
            </login>
        </div>

    </div>
</modal>