@extends('layouts.shop')

@section('content')
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner">
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="/shop">@lang('navigation.home')</a>
                                <span class="brd-separetor"><i class="zmdi zmdi-chevron-left"></i></span>
                                <a class="breadcrumb-item" href="/category/{{$product->category->id}}/products">
                                    @lang('general.Products')
                                </a>
                                <span class="brd-separetor"><i class="zmdi zmdi-chevron-left"></i></span>
                                <span class="breadcrumb-item active">{{$product->name}}</span>
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
                                        <div role="tabpanel" class="tab-pane fade in{{ $loop->first ? ' active' : '' }}"
                                             id="img-tab-{{ $loop->iteration }}">
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
                            <h6>@lang('products.Rating'): <span>{{ $product->rating()}}</span></h6>
                            @auth()
                            <star-rating initial="{{$product->ratingFor(auth()->user())}}" action="/products/{{$product->id}}/rate"></star-rating>
                            @endauth()
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
                                        <li>
                                            <a href="/category/{{ $product->category->id }}/products">{{ $product->category->name }}</a>
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
                                @foreach($product->reviews()->recent()->get() as $review)
                                    <div class="mb-4 py-2 border-b border-solid border-gray-400">
                                        <div class="flex justify-between mb-2">
                                            <h3 class="text-bold text-lg">{{$review->creator->name}}</h3>
                                            <span>{{$review->created_at->diffForHumans()}}</span>
                                        </div>
                                        <p class="">{{$review->body}}</p>
                                    </div>
                                @endforeach
                                @auth()
                                <div>
                                    <form action="/products/{{$product->id}}/reviews?review" method="post">
                                        @csrf
                                        <textarea class="single-input bg-white" name="body" ></textarea>
                                        <button type="submit" class="fr__btn">@lang('Review')</button>
                                    </form>
                                </div>
                                @endauth()
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
                        <h2 class="title__line">@lang('home.New Arrivals')</h2>
                        {{-- <p>But I must explain to you how all this mistaken idea</p> --}}
                    </div>
                </div>
            </div>
            @include('partials.recent-products')
        </div>
    </section>
    <!-- End Product Area -->
@endsection
