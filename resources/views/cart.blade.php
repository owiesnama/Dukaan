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
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img
                                                            src="images/product-2/cart-img/1.jpg"
                                                            alt="product img"/></a></td>
                                            <td class="product-name"><a href="#">New Dress For Sunday</a>
                                                <ul class="pro__prize">
                                                    <li class="old__prize">$82.5</li>
                                                    <li>$75.2</li>
                                                </ul>
                                            </td>
                                            <td class="product-price"><span class="amount">£165.00</span></td>
                                            <td class="product-quantity"><input type="number" value="1"/></td>
                                            <td class="product-subtotal">£165.00</td>
                                            <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img
                                                            src="images/product-2/cart-img/2.jpg"
                                                            alt="product img"/></a></td>
                                            <td class="product-name"><a href="#">New Dress For Sunday</a>
                                                <ul class="pro__prize">
                                                    <li class="old__prize">$82.5</li>
                                                    <li>$75.2</li>
                                                </ul>
                                            </td>
                                            <td class="product-price"><span class="amount">£50.00</span></td>
                                            <td class="product-quantity"><input type="number" value="1"/></td>
                                            <td class="product-subtotal">£50.00</td>
                                            <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img
                                                            src="images/product-2/cart-img/3.jpg"
                                                            alt="product img"/></a></td>
                                            <td class="product-name"><a href="#">New Dress For Sunday</a>
                                                <ul class="pro__prize">
                                                    <li class="old__prize">$82.5</li>
                                                    <li>$75.2</li>
                                                </ul>
                                            </td>
                                            <td class="product-price"><span class="amount">£50.00</span></td>
                                            <td class="product-quantity"><input type="number" value="1"/></td>
                                            <td class="product-subtotal">£50.00</td>
                                            <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img
                                                            src="images/product-2/cart-img/4.jpg"
                                                            alt="product img"/></a></td>
                                            <td class="product-name"><a href="#">New Dress For Sunday</a>
                                                <ul class="pro__prize">
                                                    <li class="old__prize">$82.5</li>
                                                    <li>$75.2</li>
                                                </ul>
                                            </td>
                                            <td class="product-price"><span class="amount">£50.00</span></td>
                                            <td class="product-quantity"><input type="number" value="1"/></td>
                                            <td class="product-subtotal">£50.00</td>
                                            <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="ht__coupon__code">
                                            <span>@lang('cart.enter your discount code')</span>
                                            <div class="coupon__box">
                                                <input type="text" placeholder="">
                                                <div class="ht__cp__btn">
                                                    <a href="#">@lang('cart.enter')</a>
                                                </div>
                                            </div>
                                        </div>
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
                                                    <li>$909.00</li>
                                                    <li>$9.00</li>
                                                    <li>0</li>
                                                </ul>
                                            </div>
                                            <div class="cart__total">
                                                <span>@lang('cart.order total')</span>
                                                <span>$918.00</span>
                                            </div>
                                            <ul class="payment__btn">
                                                <li class="active"><a href="/checkout">@lang('cart.payment')</a></li>
                                                <li><a href="/home">@lang('cart.continue shopping')</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart-main-area end -->
            <!-- End Brand Area -->
            <!-- Start Banner Area -->
            <div class="htc__banner__area">
                <ul class="banner__list owl-carousel owl-theme clearfix">
                    <li><a href="product-details.html"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a>
                    </li>
                    <li><a href="product-details.html"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a>
                    </li>
                    <li><a href="product-details.html"><img src="images/banner/bn-3/3.jpg" alt="banner images"></a>
                    </li>
                    <li><a href="product-details.html"><img src="images/banner/bn-3/4.jpg" alt="banner images"></a>
                    </li>
                    <li><a href="product-details.html"><img src="images/banner/bn-3/5.jpg" alt="banner images"></a>
                    </li>
                    <li><a href="product-details.html"><img src="images/banner/bn-3/6.jpg" alt="banner images"></a>
                    </li>
                    <li><a href="product-details.html"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a>
                    </li>
                    <li><a href="product-details.html"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a>
                    </li>
                </ul>
            </div>
            <!-- End Banner Area -->
            <!-- End Banner Area -->

        </div>
    </cart-view>
@endsection
