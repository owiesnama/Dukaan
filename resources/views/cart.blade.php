@extends('layouts.shop')

@section('content')
    <cart-view inline-template>
        <div>

            <div class="ht__bradcaump__area">
                <div class="ht__bradcaump__wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="bradcaump__inner">
                                    <nav class="bradcaump-inner">
                                        <a class="breadcrumb-item" href="/home">@lang('general.pages-names.home')</a>
                                        <span class="brd-separetor"><i class="zmdi zmdi-chevron-left"></i></span>
                                        <span class="breadcrumb-item active">@lang('general.pages-names.shopping cart')</span>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bradcaump area -->
            <!-- cart-main-area start -->
            <div class="cart-main-area ptb--100 bg__white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="product-thumbnail">@lang('cart.product')</th>
                                            <th class="product-name">@lang('cart.name of product')</th>
                                            <th class="product-price">@lang('cart.Price')</th>
                                            <th class="product-quantity">@lang('cart.Quantity')</th>
                                            <th class="product-subtotal">@lang('cart.Total')</th>
                                            <th class="product-remove">@lang('cart.Remove')</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="product in content">
                                            <td class="product-thumbnail"><a href="#"><img
                                                            :src="product.thumbnail"
                                                            alt="product img"/></a></td>
                                            <td class="product-name"><a href="#" v-text="product.options.name">New Dress For Sunday</a>
                                                <ul class="pro__prize">
                                                    <li v-text="product.price"></li>
                                                </ul>
                                            </td>
                                            <td class="product-price"><span class="product.price"></span></td>
                                            <td class="product-quantity">
                                                <input type="number" min="1" @input="updateProduct(product)" v-model="product.qty"/>
                                            </td>
                                            <td class="product-subtotal" v-text="product.subtotal"></td>
                                            <td class="product-remove">
                                                <a href="#" @click.prevent="removeProduct(product)"><i class="icon-trash icons"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                                        <div class="htc__cart__total">
                                            <h6>@lang('cart.cart total')</h6>
                                            <div class="cart__desk__list">
                                                <ul class="cart__desc">
                                                    <li>@lang('cart.cart total')</li>
                                                    <li>@lang('cart.tax')</li>
                                                    <li>@lang('cart.shipping')</li>
                                                </ul>
                                                <ul class="cart__price">
                                                    <li v-text="cartTotal + ' SDG'"></li>
                                                    <li>{{\Gloudemans\Shoppingcart\Facades\Cart::tax()}} SDG</li>
                                                    <li>{{config('dukaan.delivery_cost')}} SDG</li>
                                                </ul>
                                            </div>
                                            <div class="cart__total">
                                                <span>@lang('cart.order total')</span>
                                                <span v-text="parseFloat(cartTotal) + parseFloat({{Cart::tax()}}) + parseFloat({{config('dukaan.delivery_cost')}}) + ' SDG'"></span>
                                            </div>
                                            <ul class="payment__btn">
                                                <li class="active"><a :href="size(content) ? '/checkout' :'#'">@lang('cart.payment')</a></li>
                                                <li><a href="/">@lang('cart.continue shopping')</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </cart-view>
@endsection
