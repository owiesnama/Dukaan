@extends('layouts.admin')


@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add Category</a>
                    </div>
                </div>
            </div>

            @foreach($categories as $category)
                <div class="col-sm-12 col-lg-12">
                    <div class="card  mb-2">
                        <div class="card-body flex justify-between">
                            <div>
                                <h3>{{ $category->name }}</h3>
                                <p class="text-grey-300">{{ nl2br($category->desc) }}</p>
                            </div>
                            <div class="flex flex-col items-center">
                                <h3>{{ $category->parent->name }}</h3>
                                <div>
                                    <div class="col-sm-5">
                                        <a href="{{ route('admin.categories.edit', $category) }}"
                                           class="btn btn-sm btn-info">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-5">
                                        <form onsubmit="return confirm('Are you sure want to delete this?')"
                                              action="{{ route('admin.categories.destroy', $category) }}"
                                              method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{ $categories->links('vendor.pagination.default') }}

    </div>

@endsection