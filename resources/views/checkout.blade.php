@extends('layouts.shop')

@section('content')
    <Checkout-View inline-template>
        <div>
            <div class="ht__bradcaump__area"
                 style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
                <div class="ht__bradcaump__wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="bradcaump__inner">
                                    <nav class="bradcaump-inner">
                                        <a class="breadcrumb-item" href="index.blade.php">Home</a>
                                        <span class="brd-separetor"><i class="zmdi zmdi-chevron-left"></i></span>
                                        <span class="breadcrumb-item active">checkout</span>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bradcaump area -->
            <!-- cart-main-area start -->
            <div class="checkout-wrap ptb--100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="checkout__inner">
                                <div class="accordion-list">
                                    <div class="accordion">
                                        <div class="accordion__title">
                                            Checkout Method
                                        </div>
                                        <div class="accordion__body">
                                            <div class="accordion__body__form">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="checkout-method">
                                                            <form action="#">
                                                                <div class="checkout-method__single">
                                                                    <h5 class="checkout-method__title">
                                                                        @lang('checkout.checkout as a guest or register')
                                                                        <i
                                                                                class="zmdi zmdi-caret-left"></i>
                                                                    </h5>
                                                                    <p class="checkout-method__subtitle">@lang('checkout.Register with us for future convenience')
                                                                        :</p>
                                                                    <div class="single-input">
                                                                        <input type="radio" id="checkout-method-1"
                                                                               name="checkout-method" checked="checked">
                                                                        <label for="checkout-method-1">@lang('Checkout as guest')</label>
                                                                    </div>
                                                                    <div class="single-input">
                                                                        <input type="radio" id="checkout-method-2"
                                                                               name="checkout-method">
                                                                        <label for="checkout-method-2">@lang('Register')</label>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion__title">
                                            @lang('checkout.billing information')
                                        </div>
                                        <div class="accordion__body">
                                            <div class="bilinfo">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="First name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Last name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Company name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Street Address">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text"
                                                                       placeholder="Apartment/Block/House (optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="City/State">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Post code/ zip">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="email" placeholder="Email address">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Phone number">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="accordion__title">
                                            @lang('checkout.shipping information')
                                        </div>
                                        <div class="accordion__body">
                                            <div class="shipinfo">
                                                <h3 class="shipinfo__title">@lang('checkout.Shipping Address')</h3>
                                                <p><b>Address:</b> Bootexperts, Banasree D-Block, Dhaka 1219, Bangladesh
                                                </p>
                                                <a href="#"
                                                   class="ship-to-another-trigger">@lang('checkout.Ship to another address')
                                                    <i
                                                            class="zmdi zmdi-long-arrow-left"></i>
                                                </a>
                                                <div class="ship-to-another-content">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="single-input mt-0">
                                                                    <select name="bil-country" id="another-bil-country">
                                                                        <option value="select">Select your country
                                                                        </option>
                                                                        <option value="arb">Arab Emirates</option>
                                                                        <option value="ban">Bangladesh</option>
                                                                        <option value="ind">India</option>
                                                                        <option value="uk">United Kingdom</option>
                                                                        <option value="usa">United States</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="single-input">
                                                                    <input type="text" placeholder="First name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="single-input">
                                                                    <input type="text" placeholder="Last name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="single-input">
                                                                    <input type="text" placeholder="Company name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="single-input">
                                                                    <input type="text" placeholder="Street Address">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="single-input">
                                                                    <input type="text"
                                                                           placeholder="Apartment/Block/House (optional)">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="single-input">
                                                                    <input type="text" placeholder="City/State">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="single-input">
                                                                    <input type="text" placeholder="Post code/ zip">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="single-input">
                                                                    <input type="email" placeholder="Email address">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="single-input">
                                                                    <input type="text" placeholder="Phone number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion__title">
                                            @lang('checkout.shipping method')
                                        </div>
                                        <div class="accordion__body">
                                            <div class="shipmethod">
                                                <form action="#">
                                                    <div class="single-input">
                                                        <p>
                                                            <input type="radio" name="ship-method" id="ship-fast">
                                                            <label for="ship-fast">@lang('checkout.First shipping')</label>
                                                        </p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Aliquid
                                                            voluptatum quaerat totam hic suscipit quam repellat debitis
                                                            ad sed
                                                            aperiam quisquam quibusdam enim labore, ipsa illo, natus
                                                            ipsam
                                                            temporibus officia.</p>
                                                    </div>
                                                    <div class="single-input">
                                                        <p>
                                                            <input type="radio" name="ship-method" id="ship-normal">
                                                            <label for="ship-normal">@lang('checkout.Normal shipping')</label>
                                                        </p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Magnam
                                                            maxime,
                                                            eaque eos! Quidem officia similique, fuga consequatur vero?
                                                            Quis
                                                            autem
                                                            dicta voluptatibus veniam temporibus rem reprehenderit
                                                            placeat
                                                            quaerat
                                                            sunt ducimus.</p>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="accordion__title">
                                            @lang('checkout.payment information')
                                        </div>
                                        <div class="accordion__body">
                                            <div class="paymentinfo">
                                                <div class="single-method">
                                                    <a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Check/ Money
                                                        Order</a>
                                                </div>
                                                <div class="single-method">
                                                    <a href="#" class="paymentinfo-credit-trigger"><i
                                                                class="zmdi zmdi-long-arrow-right"></i>Credit Card</a>
                                                </div>
                                                <div class="paymentinfo-credit-content">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="single-input mt-0">
                                                                    <input type="text" placeholder="Name on card">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="single-input">
                                                                    <select name="bil-country" id="payment-info-type">
                                                                        <option value="select">Card type</option>
                                                                        <option value="card-1">Card type 1</option>
                                                                        <option value="card-2">Card type 2</option>
                                                                        <option value="card-3">Card type 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="single-input">
                                                                    <input type="text"
                                                                           placeholder="Credit Card Number*">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="single-input">
                                                                    <select>
                                                                        <option>Select Month</option>
                                                                        <option>Jan</option>
                                                                        <option>Feb</option>
                                                                        <option>Mar</option>
                                                                        <option>Apr</option>
                                                                        <option>May</option>
                                                                        <option>Jun</option>
                                                                        <option>Jul</option>
                                                                        <option>Aug</option>
                                                                        <option>Sep</option>
                                                                        <option>Oct</option>
                                                                        <option>Nov</option>
                                                                        <option>Dec</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="single-input">
                                                                    <select>
                                                                        <option>Select Year</option>
                                                                        <option>2015</option>
                                                                        <option>2016</option>
                                                                        <option>2017</option>
                                                                        <option>2018</option>
                                                                        <option>2019</option>
                                                                        <option>2020</option>
                                                                        <option>2021</option>
                                                                        <option>2022</option>
                                                                        <option>2023</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="single-input">
                                                                    <input type="text"
                                                                           placeholder="Card verification number*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="order-details">
                                <h5 class="order-details__title">Your Order</h5>
                                <div class="order-details__item">
                                    <div class="single-item">
                                        <div class="single-item__thumb">
                                            <img src="images/cart/1.png" alt="ordered item">
                                        </div>
                                        <div class="single-item__content">
                                            <a href="#">Santa fe jacket for men</a>
                                            <span class="price">$128</span>
                                        </div>
                                        <div class="single-item__remove">
                                            <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="single-item__thumb">
                                            <img src="images/cart/2.png" alt="ordered item">
                                        </div>
                                        <div class="single-item__content">
                                            <a href="#">Santa fe jacket for men</a>
                                            <span class="price">$128</span>
                                        </div>
                                        <div class="single-item__remove">
                                            <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-details__count">
                                    <div class="order-details__count__single">
                                        <h5>@lang('home.Subtotal:')</h5>
                                        <span class="price">$909.00</span>
                                    </div>
                                    <div class="order-details__count__single">
                                        <h5>@lang('cart.tax')</h5>
                                        <span class="price">$9.00</span>
                                    </div>
                                    <div class="order-details__count__single">
                                        <h5>@lang('cart.shipping')</h5>
                                        <span class="price">0</span>
                                    </div>
                                </div>
                                <div class="ordre-details__total">
                                    <h5>Order total</h5>
                                    <span class="price">$918.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Checkout-View>
@endsection
