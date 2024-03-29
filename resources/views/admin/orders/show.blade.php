@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.orders.index') }}"><< Back</a>

    <div class="panel">
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="20%"></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Name</td>
                    <td>{{ $order->address->name }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $order->address->phone }}</td>
                </tr>
                <tr>
                    <td>Info</td>
                    <td>{{ $order->info }}</td>
                </tr>
                <tr>
                    <td>details</td>
                    <td>{!! nl2br($order->address->details) !!}</td>
                </tr>
                <tr>
                    <td>Products</td>
                    <td>
                        <table class="table table-bordered">
                            <tbody>
                            @foreach($order->cart_details as $product)
                                <tr>
                                    <td>{{ $product->options->name }}</td>
                                    <td>Quantity: {{ $product->qty }}</td>
                                    <td>{{ number_format($product->subtotal, 2) }} SDG</td>
                                </tr>

                            @endforeach
                            <tr>
                                <td colspan="2">Total price:</td>
                                <td>{{ number_format($order->amount, 2) }} SDG</td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Change status</td>
                    <td class="flex justify-between items-center">
                        <span>{{ $order->status }}</span>
                        @if($order->status == 'pending')
                            <form action="{{ route('admin.orders.update', $order) }}" method="post">
                                @csrf
                                @method('put')

                                <button type="submit" class="btn btn-primary btn-sm my-4">Accept</button>
                            </form>
                        @endif

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@stop