<div class="row">
    <div class="product__wrap clearfix">

        @foreach($recentProducts as $recentProduct)
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="/products/{{ $recentProduct->id }}">
                            <img src="{{ $recentProduct->thumbnail }}" alt="product images">
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
                        <h4><a href="product-details.html">{{ $recentProduct->name }}</a></h4>
                        <ul class="fr__pro__prize">
                            {{-- <li class="old__prize">$30.3</li> --}}
                            <li>{{ number_format($recentProduct->price, 2) }} SDG</li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
