@extends('layouts.admin')


@section('content')

    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <a class="btn btn-primary mb-4" href="{{ route('admin.products.create') }}">@lang('general.Create product')</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                @foreach($products as $product)
                    <div class="card mb-2">
                        <div class="card-header px-2 py-1">
                            <div class="flex items-start">
                                <img src="{{$product->thumbnail}}"
                                     class="rounded w-16 h-16"
                                     alt="{{$product->name}}">
                                <div class="mx-1">
                                    <h3>{{$product->name}}</h3>
                                    <p class="text-gray-600">{{$product->category->name}}</p>
                                </div>
                                <div class="mr-auto">
                                    <div class="col-sm-5">
                                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-info">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-5">
                                        <form onsubmit="return confirm('Are you sure want to delete this?')" action="{{ route('admin.products.destroy', $product) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-2 py-1">
                            <p class="text-gray-600">{{$product->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            {{$products->links()}}
        </div>
    </div>
    
    
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@stop
