@extends('layouts.app')


@section('content')


    <section>
        <form action="{{ route('admin.categories.store') }}" method="post">
            @csrf
            <label for="name"></label>
            <input id="name" type="text" name="name" value="{{ old('name') }}">
            <label for="desc"></label>
            <textarea id="desc" name="desc">{{ old('desc') }}</textarea>
            <label for="description"></label>
            <select id="parent" name="parent_id"
            >
                <option value=""></option>
                @foreach($categories as $mainCategory)
                    <option value="{{ $mainCategory->id }}">{{ $mainCategory->name }}</option>
                @endforeach
            </select>

            <button type="submit">Create</button>
        </form>
    </section>

@endsection