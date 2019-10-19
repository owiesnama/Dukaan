@extends('layouts.shop')

@section('content')
 <div class="ht__bradcaump__area"
         style="background: rgba(0, 0, 0, 0) url(/images/bg/4.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner">
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="/shop">Home</a>
                                <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                <a class="breadcrumb-item" href="product-grid.html">Products</a>
                                <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                <span class="breadcrumb-item active">ean shirt</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Product Details Area -->
    <section class="htc__product__details bg__white ptb--100">
        <!-- Start Product Details Top -->
        <div class="htc__product__details__top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <div class="htc__product__details__tab__content">
                            <!-- Start Product Big Images -->
                            <div class="product__big__images">
                                <div class="portfolio-full-image tab-content">
                                    @foreach($product->getMedia('images') as $image)
                                        <div role="tabpanel" class="tab-pane fade in{{ $loop->first ? ' active' : '' }}" id="img-tab-{{ $loop->iteration }}">
                                        <img src="{{ $image->getUrl() }}" alt="full-image">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- End Product Big Images -->
                            <!-- Start Small images -->
                            <ul class="product__small__images" role="tablist">
                                @foreach($product->getMedia('images') as $image)
                                    <li role="presentation" class="pot-small-img {{ $loop->first ? ' active' : '' }}">
                                        <a href="#img-tab-{{ $loop->iteration }}" role="tab" data-toggle="tab">
                                            <img src="{{ $image->getUrl() }}"
                                                 alt="small-image">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <!-- End Small images -->
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                        <div class="ht__product__dtl">
                            <h2>{{ $product->name }}</h2>
                            <h6>@lang('products.Code'): <span>{{ $product->code ?? '' }}</span></h6>
                            <ul class="rating">
                                <li><i class="icon-star icons"></i></li>
                                <li><i class="icon-star icons"></i></li>
                                <li><i class="icon-star icons"></i></li>
                                <li class="old"><i class="icon-star icons"></i></li>
                                <li class="old"><i class="icon-star icons"></i></li>
                            </ul>
                            <ul class="pro__prize">
                                {{-- <li class="old__prize">$82.5</li> --}}
                                <li>{{ number_format($product->price, 2) }} SDG</li>
                            </ul>
                            <p class="pro__info">{{ nl2br($product->description) }}</p>
                            <div class="ht__pro__desc">
                                <div class="sin__desc align--left">
                                    <div class="pro__more__btn">
                                        <a href="#description">@lang('general.more')</a>
                                    </div>
                                </div>
                                <div class="sin__desc align--left">
                                    <p><span>@lang('products.categories'): </span></p>
                                    <ul class="pro__cat__list">
                                        <li><a href="/category/{{ $product->category->id }}/products">{{ $product->category->name }}</a></li>
                                    </ul>
                                </div>
                               {{--  <div class="sin__desc align--left">
                                    <p><span>@lang('general.tags'):</span></p>
                                    <ul class="pro__cat__list">
                                        <li><a href="#">Fashion,</a></li>
                                        <li><a href="#">Accessories,</a></li>
                                        <li><a href="#">Women,</a></li>
                                        <li><a href="#">Men,</a></li>
                                        <li><a href="#">Kid,</a></li>
                                    </ul>
                                </div> --}}

                                <div class="sin__desc product__share__link">
                                    <p><span>@lang('general.Share this'):</span></p>
                                    <ul class="pro__share">
                                        <li><a href="#" target="_blank"><i
                                                        class="icon-social-twitter icons"></i></a></li>

                                        <li><a href="#" target="_blank"><i class="icon-social-instagram icons"></i></a>
                                        </li>

                                        <li><a href="https://www.facebook.com/Furny/?ref=bookmarks" target="_blank"><i
                                                        class="icon-social-facebook icons"></i></a></li>

                                        <li><a href="#" target="_blank"><i class="icon-social-google icons"></i></a>
                                        </li>

                                        <li><a href="#" target="_blank"><i
                                                        class="icon-social-linkedin icons"></i></a></li>

                                        <li><a href="#" target="_blank"><i class="icon-social-pinterest icons"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Details Top -->
    </section>
    <!-- End Product Details Area -->
    <!-- Start Product Description -->
    <section class="htc__produc__decription bg__white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Start List And Grid View -->
                    <ul class="pro__details__tab" role="tablist">
                        <li role="presentation" class="description active"><a href="#description" role="tab"
                                                                              data-toggle="tab">@lang('products.description')</a>
                        </li>
                        <li role="presentation" class="review"><a href="#review" role="tab"
                                                                  data-toggle="tab">@lang('products.review')</a></li>
                    </ul>
                    <!-- End List And Grid View -->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="ht__pro__details__content">
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
                            <div class="pro__tab__content__inner">

                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="review" class="pro__single__content tab-pane fade">
                            <div class="pro__tab__content__inner">

                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Description -->
    <!-- Start Product Area -->
    <section class="htc__product__area--2 pb--100 product-details-res">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title--2 text-center">
                        <h2 class="title__line">New Arrivals</h2>
                        {{-- <p>But I must explain to you how all this mistaken idea</p> --}}
                    </div>
                </div>
            </div>
            @include('partials.recent-products')
        </div>
    </section>
    <!-- End Product Area -->
@endsection
