@extends('layouts.admin')


@section('content')
    <div class="container mt-2">
        <div class="row">
            <section class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">

                        </div>
                        <table class="table table-striped table-hover">
                            <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th width="10%">Address</th>
                                <th>Products</th>
                                <th>Status</th>
                                <th width="10%">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->address->name }}</td>
                                    <td>{{ $order->address->phone }}</td>
                                    <td>{{ $order->info }}</td>
                                    <td>{!! nl2br($order->address->details) !!}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('admin.orders.show', $order) }}">Show</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div>
                    {{ $orders->links('vendor.pagination.default') }}
                </div>
            </section>
        </div>
    </div>
@endsection