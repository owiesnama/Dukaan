@extends('layouts.shop')

@section('content')
    <shop-view inline-template>
        <div>
            <!-- Start Slider Area -->
            <!-- Start Category Area -->
            <section class="htc__category__area ptb--100">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section__title--2 text-center">
                                <h2 class="title__line">@lang('home.New Arrivals')</h2>
                                <p>@lang('home.What\'s new in our store')</p>
                                @include('partials.recent-products')
                            </div>
                        </div>
                    </div>
                    <div class="htc__product__container">
                        <div class="row">
                            <div class="product__list clearfix mt--30">
                                <!-- Start Single Category -->
                                @foreach($products as $product)
                                    <div class="col-md-4    col-lg-3 col-sm-4 col-xs-12">

                                        <Product :product="{{$product}}"></Product>

                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Category Area -->
            <!-- Start Prize Good Area -->
            <section class="htc__good__sale bg__cat--3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="fr__prize__inner">
                                <h2>المنتجات الافضل لك الان</h2>
                                <h3>افضل الاسعار لك </h3>
                                <a class="fr__btn" href="#">@lang('home.Read More')</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="prize__inner">
                                <div class="prize__thumb">
                                    <img src="{{asset('/images/banner/big-img/1.png')}}" alt="banner images">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Prize Good Area -->
            <!-- Start Product Area -->
            <section class="ftr__product__area ptb--100">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section__title--2 text-center">
                                <h2 class="title__line">@lang('home.Best Seller')</h2>
                                <p>@lang('home.Explore what people buy the most')</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="product__wrap clearfix">
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="/products/1">
                                            <img src="{{asset('/images/product/9.jpg')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="/cart"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="/products/1">Special Wood Basket</a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">$30.3</li>
                                            <li>$25.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="/products/1">
                                            <img src="{{asset('/images/product/10.jpg')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="/cart"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="/products/1">voluptatem accusantium</a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">$30.3</li>
                                            <li>$25.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="/products/1">
                                            <img src="{{asset('/images/product/11.jpg')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="/cart"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="/products/1">Product Dummy Name</a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">$30.3</li>
                                            <li>$25.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="/products/1">
                                            <img src="{{asset('/images/product/12.jpg')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="/cart"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="/products/1">Product Title Here </a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">$30.3</li>
                                            <li>$25.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Product Area -->
            <!-- Start Top Rated Area -->
            <section class="top__rated__area bg__white pt--100 pb--110">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__title--2 text-center">
                                <h2 class="title__line">@lang('home.Top Rated')</h2>
                                <p>@lang('home.What people like the most')</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--20">
                        <!-- Start Single Product -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="htc__best__product">
                                <div class="htc__best__pro__thumb">
                                    <a href="/products/1">
                                        <img src="{{asset('/images/product-2/sm-img-2/1.jpg')}}" alt="small product">
                                    </a>
                                </div>
                                <div class="htc__best__product__details">
                                    <h2><a href="/products/1">dummy Product title</a></h2>
                                    <ul class="rating">
                                        <li><i class="icon-star icons"></i></li>
                                        <li><i class="icon-star icons"></i></li>
                                        <li><i class="icon-star icons"></i></li>
                                        <li class="old"><i class="icon-star icons"></i></li>
                                        <li class="old"><i class="icon-star icons"></i></li>
                                    </ul>
                                    <ul class="top__pro__prize">
                                        <li class="old__prize">$82.5</li>
                                        <li>$75.2</li>
                                    </ul>
                                    <div class="best__product__action">
                                        <ul class="product__action--dft">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>
                                            <li><a href="/cart"><i class="icon-handbag icons"></i></a></li>
                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="htc__best__product">
                                <div class="htc__best__pro__thumb">
                                    <a href="/products/1">
                                        <img src="{{asset('/images/product-2/sm-img-2/2.jpg')}}" alt="small product">
                                    </a>
                                </div>
                                <div class="htc__best__product__details">
                                    <h2><a href="/products/1">dummy Product title</a></h2>
                                    <ul class="rating">
                                        <li><i class="icon-star icons"></i></li>
                                        <li><i class="icon-star icons"></i></li>
                                        <li><i class="icon-star icons"></i></li>
                                        <li class="old"><i class="icon-star icons"></i></li>
                                        <li class="old"><i class="icon-star icons"></i></li>
                                    </ul>
                                    <ul class="top__pro__prize">
                                        <li class="old__prize">$82.5</li>
                                        <li>$75.2</li>
                                    </ul>
                                    <div class="best__product__action">
                                        <ul class="product__action--dft">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>
                                            <li><a href="/cart"><i class="icon-handbag icons"></i></a></li>
                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="htc__best__product">
                                <div class="htc__best__pro__thumb">
                                    <a href="/products/1">
                                        <img src="{{asset('/images/product-2/sm-img-2/3.jpg')}}" alt="small product">
                                    </a>
                                </div>
                                <div class="htc__best__product__details">
                                    <h2><a href="/products/1">dummy Product title</a></h2>
                                    <ul class="rating">
                                        <li><i class="icon-star icons"></i></li>
                                        <li><i class="icon-star icons"></i></li>
                                        <li><i class="icon-star icons"></i></li>
                                        <li class="old"><i class="icon-star icons"></i></li>
                                        <li class="old"><i class="icon-star icons"></i></li>
                                    </ul>
                                    <ul class="top__pro__prize">
                                        <li class="old__prize">$82.5</li>
                                        <li>$75.2</li>
                                    </ul>
                                    <div class="best__product__action">
                                        <ul class="product__action--dft">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>
                                            <li><a href="/cart"><i class="icon-handbag icons"></i></a></li>
                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                    </div>
                </div>
            </section>
            <!-- End Top Rated Area -->
            <!-- End Banner Area -->
            <!-- Start Footer Area -->
        </div>
    </shop-view>
@endsection
