@extends('layouts.app')


@section('content')


    <section>
        <form action="/admin/products/{{$product->id}}" method="post">
            @csrf
            @method('put')
            <label for="name"></label>
            <input id="name" type="text" name="name" value="{{old('name') ?: $product->name}}">
            <label for="price"></label>
            <input id="price" type="number" name="price" value="{{old('price') ?: $product->price}}">
            <label for="description"></label>
            <textarea id="description" name="description"
            >{{old('description') ?: $product->description}}</textarea>

            <button type="submit">Update</button>
        </form>
    </section>

@endsection