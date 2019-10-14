@extends('adminlte::page')


@section('content')

    <section>
        <form action="{{ route('admin.products.update', $product) }}" method="post" class="form-horizontal col-lg-6">
            @csrf
            @method('put')
            <div class="form-group">
                <label class="control-label col-sm-4" for="name">Name</label>
                <div class="col-sm-8">
                    <input id="name" type="text" name="name" value="{{ $product->name?:old('name') }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="price">Price</label>
                <div class="col-sm-8">
                    <input id="name" type="text" name="price" value="{{ $product->price?:old('price') }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="description">Description</label>
                <div class="col-sm-8">
                    <textarea id="description" name="description"
                        class="form-control" rows="4">{{ $product->description?:old('description') }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="category">Category</label>
                <div class="col-sm-8">
                    <select name="category_id" id="category" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"{{ $product->category->is($category) ? ' selected' : '' }}>{{ $category->name }}</option>
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