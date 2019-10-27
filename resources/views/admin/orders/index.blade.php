@extends('adminlte::page')


@section('content')
    <section>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="5%"></th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th width="10%">Address</th>
                    <th>Products</th>
                    <th>Status</th>
                    <th width="10%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->address->name }}</td>
                    <td>{{ $order->address->phone }}</td>
                    <td>{{ $order->info }}</td>
                    <td>{{ nl2br($order->address->details) }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order) }}">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            {{ $orders->links() }}
        </div>
    </section>

@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@stop
