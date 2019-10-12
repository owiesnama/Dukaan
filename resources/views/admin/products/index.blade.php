@extends('adminlte::page')


@section('content')

    <section>
        
        <ul>
            @forelse($products as $product)
                <li>
                    <div>
                        <a href="{{$product->path()."/edit"}}">{{$product->name}}</a>
                    </div>
                    <div>{{$product->description}}</div>
                    <div>{{$product->price}}</div>
                </li>

            @empty

            @endforelse
        </ul>

        <div>
            {{$products->links()}}
        </div>
    </section>

@endsection