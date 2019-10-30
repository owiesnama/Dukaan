<div class="col-md-5">
    <div class="checkout-method__login">
        <form action="#">
            <h5 class="checkout-method__title">@lang('checkout.Login')</h5>
            <h5 class="checkout-method__title">@lang('checkout.Already Registered?')</h5>
            <p class="checkout-method__subtitle">@lang('checkout.Please login below')
                :</p>
            <div class="single-input">
                <label for="user-email">@lang('checkout.Email Address')</label>
                <input type="email" id="user-email">
            </div>
            <div class="single-input">
                <label for="user-pass">@lang('checkout.Password')</label>
                <input type="password" id="user-pass">
            </div>
            <p class="require">
                *@lang('checkout.Required fields')</p>
            <a href="#">@lang('checkout.Forgot Passwords?')</a>
            <div class="dark-btn">
                <a href="#">@lang('checkout.Login')</a>
            </div>
        </form>
    </div>
</div>
