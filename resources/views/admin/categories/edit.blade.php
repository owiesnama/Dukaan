@extends('adminlte::page')


@section('content')


    <section>
        <form action="{{ route('admin.categories.update', $category) }}" method="post" class="form-horizontal col-lg-6">
            @csrf
            @method('put')
            <div class="form-group">
                <label class="control-label col-sm-4" for="name">Name</label>
                <div class="col-sm-8">
                    <input id="name" type="text" name="name" value="{{ $category->name?:old('name') }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="desc">Description</label>
                <div class="col-sm-8">
                    <textarea id="desc" name="desc" class="form-control">{{ $category->desc?:old('desc') }}</textarea>
                </div>    
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="parent"></label>
                <div class="col-sm-8">
                    <select id="parent" name="parent_id" class="form-control">
                    <option value=""></option>
                    @foreach($categories as $mainCategory)
                        <option value="{{ $mainCategory->id }}" {{ $mainCategory->is($category->parent) ? 'selected': '' }}>{{ $mainCategory->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-sm-8 col-sm-offset-4">
                <button type="submit" class="btn btn-info btn-lg">Update</button>
            </div>
        </form>
    </section>

@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@stop
