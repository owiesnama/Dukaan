@extends('layouts.admin')


@section('content')

    <section>
        <a class="btn btn-primary mb-4" href="{{ route('admin.products.create') }}">Add product</a>
        <div class="panel">
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <th width="5%"></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th width="10%"></th>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ $product->thumbnail }}" alt="" width="60" height="60">
                                {{ $product->name }}
                            </td>
                            <td>{{ number_format($product->price, 2) }}</td>
                            <td>{{ nl2br($product->description) }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>
                                <div class="col-sm-5">
                                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-info">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                </div>
                                <div class="col-sm-5">
                                    <form onsubmit="return confirm('Are you sure want to delete this?')" action="{{ route('admin.products.destroy', $product) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            {{ $products->links('vendor.pagination.default') }}
        </div>
    </section>

@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@stop
