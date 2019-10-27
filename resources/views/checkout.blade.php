@extends('layouts.shop')

@section('content')
    <Checkout-View inline-template>
        <div>
            <div class="ht__bradcaump__area">
                <div class="ht__bradcaump__wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="bradcaump__inner">
                                    <nav class="bradcaump-inner">
                                        <a class="breadcrumb-item" href="/">@lang('navigation.home')</a>
                                        <span class="brd-separetor"><i class="zmdi zmdi-chevron-left"></i></span>
                                        <span class="breadcrumb-item active">@lang('general.pages-names.checkout')</span>
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
                                    <form action="{{ route('checkout.store') }}" method="post">
                                        @csrf
                                        <div>
                                            <h3 class="title my-2 text-2xl font-bold">@lang('checkout.shipping method')</h3>

                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="checkout-method">
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
                                                                       value="guest"
                                                                       v-model="checkout_method"
                                                                       @change="onMethodChange"
                                                                       name="checkout_method" checked="checked">
                                                                <label for="checkout-method-1">@lang('checkout.Checkout as guest')</label>
                                                            </div>
                                                            <div class="single-input">
                                                                <input type="radio" id="checkout-method-2"
                                                                       value="register"
                                                                       v-model="checkout_method"
                                                                       @change="onMethodChange"
                                                                       name="checkout_method">
                                                                <label for="checkout-method-2">@lang('checkout.Register')</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="title my-2 text-2xl font-bold">@lang('checkout.Billing data')</h3>

                                            <div class="bilinfo">
                                                <div class="row">
                                                    <div class="col-md-12" v-if="show_email">
                                                        <div class="single-input">
                                                            <input type="text" name="address[email]"
                                                                   placeholder="@lang('checkout.Email Address')"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" name="address[name]"
                                                                   placeholder="@lang('checkout.Name')" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" name="address[city]"
                                                                   placeholder="@lang('checkout.City')" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" name="address[address]"
                                                                   placeholder="@lang('checkout.Address')" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" name="address[phone]"
                                                                   placeholder="@lang('checkout.Phone')" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                                <textarea name="address[details]"
                                                                          placeholder="@lang('checkout.Description')"
                                                                          rows="4" class="form-control"
                                                                          required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="dark-btn mt-4">
                                            <button type="submit"
                                                    class="dark-btn">@lang('checkout.Purchase order')</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="order-details">
                                <h5 class="order-details__title">@lang('checkout.Your Order')</h5>
                                <div class="order-details__item">
                                        <div class="single-item" v-for="product in cartContent">
                                            <div class="single-item__thumb">
                                                <img :src="product.options.thumbnail" alt="ordered item">
                                            </div>
                                            <div class="single-item__content">
                                                <a href="#" v-text="product.options.name">
                                                    <div class="label label-primary" v-text="product.qty"></div>
                                                </a>
                                                <span class="price" v-text="product.price.toFixed(2)"></span>
                                            </div>
                                            <div class="single-item__remove">
                                                <a href="#" @click.prevent="removeProduct(product)"><i class="zmdi zmdi-delete"></i></a>
                                            </div>
                                        </div>
                                </div>
                                <div class="order-details__count">
                                    <div class="order-details__count__single">
                                        <h5>@lang('home.Subtotal:')</h5>
                                        <span class="price">{{ Cart::total() }} SDG</span>
                                    </div>
                                    <div class="order-details__count__single">
                                        <h5>@lang('cart.tax')</h5>
                                        <span class="price">0.00 SDG</span>
                                    </div>
                                    <div class="order-details__count__single">
                                        <h5>@lang('cart.shipping')</h5>
                                        <span class="price">{{ config('dukaan.delivery_cost') }} SDG</span>
                                    </div>
                                </div>
                                <div class="ordre-details__total">
                                    <h5>@lang('checkout.Order total')</h5>
                                    <span class="price">{{ Cart::total() }} SDG</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Checkout-View>
@endsection
