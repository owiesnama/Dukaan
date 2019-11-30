@extends('layouts.admin')


@section('content')

    <section class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.products.update', $product) }}" method="post" class="form-horizontal col-lg-6" enctype="multipart/form-data">
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
                                <label class="control-label col-sm-4" for="details">Detailed description</label>
                                <div class="col-sm-8">
                    <textarea id="details" name="detailed_description"
                              class="form-control" rows="6">{{ $product->detailed_description?:old('detailed_description') }}</textarea>
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
                                @foreach($product->getMedia('images') as $image)
                                    <img src="{{ $image->getUrl() }}" alt="" width="100" height="100">
                                    <a href="{{ route('admin.remove-media', $image) }}" class="btn btn-danger" onclick="return confirm('Delete image?')"><i class="fa fa-trash"></i></a>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4" for="images">Images</label>
                                <div class="col-sm-8">
                                    <input type="file" id="images" name="images[]" multiple>
                                </div>
                            </div>

                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@stop
