<!-- Start Header Style -->
<header id="htc__header" class="htc__header__area header--one">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
        <div class="container">
            <div class="row">
                <div class="menumenu__container clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="logo">
                            <a href="/">Dukaan</a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                        <nav class="main__menu__nav hidden-xs hidden-sm">
                            <ul class="main__menu">
                                <li class="drop"><a href="{{route('home')}}">@lang('navigation.shop')</a>
                                    <ul class="dropdown mega_dropdown">
                                        <!-- Start Single Mega MEnu -->
                                        @foreach($mainCategories->take(8) as $mainCategory)
                                            <li><a class="mega__title"
                                                   href="product-grid.html">{{$mainCategory->name}}</a>
                                                <ul class="mega__item">
                                                    @foreach($mainCategory->children as $category)
                                                        <li>
                                                            <a href="/category/{{$category->id}}/products">{{$category->name}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                    @endforeach<!-- End Single Mega MEnu -->
                                    </ul>
                                </li>
                                <li class="drop"><a href="{{route('cart')}}">@lang('navigation.cart')</a></li>
                                <li class="drop"><a href="/contact-us">@lang('navigation.contact us')</a></li>
                            </ul>
                        </nav>

                        <div class="mobile-menu clearfix visible-xs visible-sm">
                            <nav id="mobile_dropdown">
                                <ul>
                                    <li><a href="{{route('home')}}">@lang('navigation.home')</a></li>
                                    <li><a href="{{route('home')}}">@lang('navigation.shop')</a></li>
                                    <li><a href="{{route('cart')}}">@lang('navigation.cart')</a></li>
                                    <li><a href="{{route('contact us')}}">@lang('navigation.contact us')</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                        <div class="header__right">
                            <div class="header__search search search__open">
                                <a href="#"><i class="icon-magnifier icons"></i></a>
                            </div>
                            <div class="header__account">
                                <a href="#"><i class="icon-user icons"></i></a>
                            </div>
                            <div class="htc__shopping__cart">
                                <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                <a><span class="htc__qua">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
<!-- End Header Area -->
