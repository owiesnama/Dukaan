<div class="row">
    <div class="product__wrap clearfix">

        @foreach($recentProducts as $recentProduct)
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <Product :product="{{$recentProduct}}"></Product>
            </div>
        @endforeach

    </div>
</div>
