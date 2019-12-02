@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">

                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">@lang('admin.Revenues')</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ number_format($revenues, 2) }} SDG</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <i class="fa fa-money-bill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">@lang('admin.New users')</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $users }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-blue text-white rounded-circle shadow">
                                            <i class="fa fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">@lang('admin.Products')</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $products }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gray text-white rounded-circle shadow">
                                            <i class="fa fa-boxes"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">@lang('admin.Pending Orders')</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $pendingOrders }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach($charts as $chart)
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="card my-2">
                        <div class="card-header p-4">
                            <h1>@lang('admin.'.$chart->options['chart_title'])</h1>
                        </div>
                        <div class="card-body">
                            {!! $chart->renderHtml() !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


@section('js')
    @foreach($charts as $chart)
        {!! $chart->renderChartJsLibrary() !!}
        {!! $chart->renderJs() !!}
    @endforeach
@endsection
