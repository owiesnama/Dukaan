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
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th width="60%">@lang('account.details')</th>
                                        <th width="10%">@lang('account.total')</th>
                                        <th width="15%">@lang('account.date')</th>
                                        <th width="15%">@lang('account.status')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    @foreach($order->cart_details as $product)
                                                        <tr>
                                                            <td>
                                                                <a href="/products/{{ $product->id }}">{{ $product->options->name }}</a>
                                                            </td>
                                                            <td>@lang('account.quantity'): {{ $product->qty }}</td>
                                                            <td>{{ number_format($product->subtotal, 2) }} SDG</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td>{{ number_format($order->amount, 2) }} SDG</td>
                                            <td>
                                                {{ $order->created_at->format('Y-m-d H:i') }}
                                                <br>
                                                {{ $order->created_at->diffForHumans() }}
                                            </td>
                                            <td>
                                                <span class="text-lg {{ $order->status == 'pending' ? 'text-warning' : 'text-success' }}">@lang('account.' . trim($order->status))</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="profile" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>@lang('checkout.Name')</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('checkout.Email')</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('checkout.City')</td>
                                    <td>{{ $user->address->city }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('checkout.Phone')</td>
                                    <td>{{ $user->address->phone }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('checkout.Address')</td>
                                    <td>{{ $user->address->address }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('checkout.Description')</td>
                                    <td>{!! nl2br($user->address->details) !!}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>

    </div>

@endsection