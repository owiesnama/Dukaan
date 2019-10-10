@extends('layouts.app')


@section('content')

    <section>
        <form action="/admin/products" method="post">
            @csrf
            <label for="name"></label>
            <input id="name" type="text" name="name">
            <label for="price"></label>
            <input id="price" type="number" name="price">
            <label for="description"></label>
            <textarea id="description" name="description"></textarea>

            <button type="submit">Create</button>
        </form>
    </section>

@endsection