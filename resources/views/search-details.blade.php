@extends('layouts.shop')

@section('content')
    <products-view inline-template>
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
                                        <span class="breadcrumb-item active">@lang('general.Products')</span>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bradcaump area -->
            <!-- Start Product Grid -->
            <section class="htc__product__grid bg__white ptb--100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                            <div class="htc__product__rightidebar">
                                <div class="htc__grid__top">
                                    <div class="htc__select__option">
                                        <select class="ht__select" name="showBy" v-model="showBy">
                                            <option value="">@lang('products.Show by')</option>
                                            <option value="popularity">@lang('products.Sort by popularity')</option>
                                            <option value="rating">@lang('products.Sort by average rating')</option>
                                            <option value="newness">@lang('products.Sort by newness')</option>
                                        </select>
                                    </div>
                                    <div class="ht__pro__qun">
                                <span>@lang('products.Showing') {{$products->firstItem()}}
                                    - {{$products->lastItem()}} @lang('products.of')
                                    {{$products->total()}} @lang('products.products')</span>
                                    </div>
                                    <!-- Start List And Grid View -->
                                    <ul class="view__mode" role="tablist">
                                        <li role="presentation" class="grid-view active"><a href="#grid-view" role="tab"
                                                                                            data-toggle="tab"><i
                                                        class="zmdi zmdi-grid"></i></a></li>
                                        <li role="presentation" class="list-view"><a href="#list-view" role="tab"
                                                                                     data-toggle="tab"><i
                                                        class="zmdi zmdi-view-list"></i></a></li>
                                    </ul>
                                    <!-- End List And Grid View -->
                                </div>
                                <!-- Start Product View -->
                                <div class="row">
                                    <div class="shop__grid__view__wrap">
                                        <div role="tabpanel" id="grid-view"
                                             class="single-grid-view tab-pane fade in active clearfix">

                                            @foreach($products->chunk(3) as $row)
                                                <div class="row">
                                                    @foreach($row as $product)
                                                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                                            <product :product="{{$product}}"></product>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach

                                        </div>
                                        <div role="tabpanel" id="list-view"
                                             class="single-grid-view tab-pane fade clearfix">
                                            <div class="col-xs-12">
                                                <div class="ht__list__wrap">
                                                    <!-- Start List Product -->
                                                    @foreach($products as $product)
                                                        <div class="ht__list__product">
                                                            <div class="ht__list__thumb">
                                                                <a href="/products/{{$product->id}}">
                                                                    <img src="{{$product->thumbnail}}"
                                                                         alt="{{$product->description}}"></a>
                                                            </div>
                                                            <div class="htc__list__details">
                                                                <h2>
                                                                    <a href="/products/{{$product->id}}">{{$product->name}}</a>
                                                                </h2>
                                                                <ul class="pro__prize">
                                                                    <li>{{$product->price}}</li>
                                                                </ul>
                                                                @auth()
                                                                <start-rating></start-rating>
                                                                @endauth()
                                                                <p>{{$product->description}}</p>
                                                                <div class="fr__list__btn">
                                                                    <a class="fr__btn"
                                                                       href="/cart" @click.prevent="addToCart({{$product}})">@lang('general.Add to cart')</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product View -->
                            </div>
                            <!-- Start Pagenation -->
                            <div class="row">
                                <div class="col-xs-12">
                                    {{$products->links()}}
                                </div>
                            </div>
                            <!-- End Pagenation -->
                        </div>
                        <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="htc__product__leftsidebar">
                                <!-- Start Prize Range -->
                                <div class="htc-grid-range">
                                    <h4 class="title__line--4">Price</h4>
                                    <div class="content-shopby">
                                        <div class="price_filter s-filter clear">
                                            <form action="#" method="GET">
                                                <div id="slider-range"></div>
                                                <div class="slider__range--output">
                                                    <div class="price__output--wrap">
                                                        <div class="price--output">
                                                            <span>@lang('products.Price') :</span><input type="text"
                                                                                                         id="amount"
                                                                                                         readonly>
                                                        </div>
                                                        <div class="price--filter">
                                                            <a href="#">@lang('products.Filter')</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Prize Range -->
                                <!-- Start Category Area -->

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Product Grid -->
        </div>
    </products-view>
@endsection