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
                </div>
            </section>
            <!-- End Category Area -->
            <!-- Start Prize Good Area -->

            {{--<section class="htc__good__sale bg__cat--3">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
                            {{--<div class="fr__prize__inner">--}}
                                {{--<h2>المنتجات الافضل لك الان</h2>--}}
                                {{--<h3>افضل الاسعار لك </h3>--}}
                                {{--<a class="fr__btn" href="#">@lang('home.Read More')</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
                            {{--<div class="prize__inner">--}}
                                {{--<div class="prize__thumb">--}}
                                    {{--<img src="{{asset('/images/banner/big-img/1.png')}}" alt="banner images">--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</section>--}}

            @if(!! $mostRatedProducts->count())
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
                        @foreach($mostRatedProducts as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="htc__best__product">
                                    <div class="htc__best__pro__thumb">
                                        <a href="/products/{{$product->id}}">
                                            <img src="{{$product->thumbnail}}" alt="{{$product->description}}">
                                        </a>
                                    </div>
                                    <div class="htc__best__product__details">
                                        <h2><a href="/products/{{$product->id}}">{{$product->name}}</a></h2>
                                        @auth()
                                        <start-rating></start-rating>
                                        @endauth()
                                        <ul class="top__pro__prize">
                                            <li>{{$product->price}}</li>
                                        </ul>
                                        <div class="best__product__action">
                                            <ul class="product__action--dft">
                                                <li><a href="/cart"><i class="icon-handbag icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            @endif
                <!-- End Top Rated Area -->
            <!-- End Banner Area -->
            <!-- Start Footer Area -->
        </div>
    </shop-view>
@endsection
