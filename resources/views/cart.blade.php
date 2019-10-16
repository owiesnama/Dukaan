@extends('layouts.shop')

@section('content')
    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
        <!-- Start Search Popap -->
        <div class="search__area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search__inner">
                            <form action="#" method="get">
                                <input placeholder="Search here... " type="text">
                                <button type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->
        <!-- Start Cart Panel -->
        <div class="shopping__cart">
            <div class="shopping__cart__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="shp__cart__wrap">
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="images/product-2/sm-smg/1.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                            <span class="quantity">QTY: 1</span>
                            <span class="shp__price">$105.00</span>
                        </div>
                        <div class="remove__btn">
                            <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="images/product-2/sm-smg/2.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2><a href="product-details.html">Brone Candle</a></h2>
                            <span class="quantity">QTY: 1</span>
                            <span class="shp__price">$25.00</span>
                        </div>
                        <div class="remove__btn">
                            <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shoping__total">
                    <li class="subtotal">Subtotal:</li>
                    <li class="total__price">$130.00</li>
                </ul>
                <ul class="shopping__btn">
                    <li><a href="cart.html">View Cart</a></li>
                    <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                </ul>
            </div>
        </div>
        <!-- End Cart Panel -->
    </div>
    <!-- End Offset Wrapper -->
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner">
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="/home">Home</a>
                                <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                <span class="breadcrumb-item active">shopping cart</span>
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
                                    <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
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
                                    <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
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
                                    <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
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
                                    <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
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
                                        <li class="active"><a href="#">@lang('cart.payment')</a></li>
                                        <li><a href="#">@lang('cart.continue shopping')</a></li>
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
@endsection