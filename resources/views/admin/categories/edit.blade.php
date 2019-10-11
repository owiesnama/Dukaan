@extends('layouts.app')


@section('content')


    <section>
        <form action="{{ route('admin.categories.update', $category->id) }}" method="post">
            @csrf
            @method('put')
            <label for="name"></label>
            <input id="name" type="text" name="name" value="{{old('name') ?: $category->name}}">
            <label for="desc"></label>
            <textarea id="desc" name="desc">{{ old('desc') ?: $category->desc }}</textarea>
            <label for="description"></label>
            <select id="parent" name="parent_id"
            >
                <option value=""></option>
                @foreach($categories as $mainCategory)
                    @if($mainCategory->is($category))
                        @continue
                    @endif
                    <option value="{{ $mainCategory->id }}" {{ $mainCategory->is($category->parent) ? 'selected' : '' }}>{{ $mainCategory->name }}</option>
                @endforeach
            </select>

            <button type="submit">Update</button>
        </form>
    </section>

@endsection