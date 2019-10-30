@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-money-bill"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Revenues</span>
                    <span class="info-box-number">{{ number_format($revenues, 2) }} SDG</span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Registered users</span>
                    <span class="info-box-number"> {{ $users }}</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-cubes"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Products</span>
                    <span class="info-box-number">{{ $products }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-android-send"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Pending orders</span>
                    <span class="info-box-number">{{ $pendingOrders }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($charts as $chart)
        <div class="col-lg-4">
                <h1>{{ $chart->options['chart_title'] }}</h1>
                {!! $chart->renderHtml() !!}
        </div>
        @endforeach
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@stop

@section('js')
    @foreach($charts as $chart)
        {!! $chart->renderChartJsLibrary() !!}
        {!! $chart->renderJs() !!}
    @endforeach
@stop
