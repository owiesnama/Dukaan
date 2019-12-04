@extends('layouts.admin')


@section('content')

    <section class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger flex">
                                <button type="button" class="close mx-2" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>

                            </div>
                        @endif
                        <form action="{{ route('admin.products.update', $product) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label class="control-label" for="name">Name</label>
                                <input id="name" type="text" name="name" value="{{ $product->name?:old('name') }}"
                                       class="form-control">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="price">Price</label>
                                <input id="name" type="text" name="price" value="{{ $product->price?:old('price') }}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="description">Description</label>
                                <textarea id="description" name="description"
                                          class="form-control"
                                          rows="4">{{ $product->description?:old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="details">Detailed description</label>
                                <textarea id="details" name="detailed_description"
                                          class="form-control"
                                          rows="6">{{ $product->detailed_description?:old('detailed_description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="category">Category</label>
                                <select name="category_id" id="category" class="form-control" required>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"{{ $product->category->is($category) ? ' selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @foreach($product->getMedia('images') as $image)
                                <img src="{{ $image->getUrl() }}" alt="" width="100" height="100">
                                <a href="{{ route('admin.remove-media', $image) }}" class="btn btn-danger"
                                   onclick="return confirm('Delete image?')"><i class="fa fa-trash"></i></a>
                            @endforeach

                            <div class="form-group">
                                <label class="control-label" for="images">Images</label>
                                <input type="file" id="images" name="images[]" multiple>
                            </div>

                            <button type="submit" class="btn btn-info">Update</button>
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
