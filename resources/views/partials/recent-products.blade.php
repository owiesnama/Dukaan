<div class="row">
    <div class="product__wrap clearfix">

        @forelse($recentProducts as $recentProduct)
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <Product :product="{{$recentProduct}}"></Product>
            </div>
        @empty
            <div class="flex justify-center text-muted">
                There is no products right now
            </div>
        @endforelse

    </div>
</div>
