@extends('layouts.shop')

@section('content')

    <div class="container">
        <div class="flex py-8 items-center">
            <h4 class="text-lg">@lang('general.Hello') , </h4><p> {{$user->name}}</p>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <!-- Start List And Grid View -->
                <ul class="pro__details__tab" role="tablist">
                    <li role="presentation" class="description active"><a href="#orders" role="tab"
                                                                          data-toggle="tab">@lang('general.Orders')</a>
                    </li>
                    <li role="presentation" class="review"><a href="#profile" role="tab"
                                                              data-toggle="tab">@lang('general.Profile')</a></li>
                </ul>
                <!-- End List And Grid View -->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="ht__pro__details__content">
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="orders" class="pro__single__content tab-pane fade in active">
                        <div class="pro__tab__content__inner">

                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="profile" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">
                        </div>
                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>

    </div>

@endsection