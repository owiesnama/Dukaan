@extends('adminlte::page')


@section('content')

    <section>
        <form action="{{ route('admin.products.store') }}" method="post" class="form-horizontal col-lg-6" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-4" for="name">Name</label>
                <div class="col-sm-8">
                    <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="price">Price</label>
                <div class="col-sm-8">
                    <input id="name" type="text" name="price" value="{{ old('price') }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="description">Description</label>
                <div class="col-sm-8">
                    <textarea id="description" name="description"
                        class="form-control" rows="4">{{ old('description') }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="category">Category</label>
                <div class="col-sm-8">
                    <select name="category_id" id="category" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="images">Images</label>
                <div class="col-sm-8">
                    <input type="file" id="images" name="images[]" multiple>
                </div>
            </div>

             <div class="col-sm-8 col-sm-offset-4">
                <button type="submit" class="btn btn-primary btn-lg">Create</button>
            </div>
        </form>
    </section>

@endsection