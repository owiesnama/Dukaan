@extends('adminlte::page')


@section('content')
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add Category</a>
    <br>
    <section>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="5%"></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Main category</th>
                    <th width="10%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ nl2br($category->desc) }}</td>
                    <td>{{ $category->parent->name }}</td>
                    <td>
                        <div class="col-sm-5">
                            <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-pen"></i>
                            </a>
                        </div>
                        <div class="col-sm-5">
                            <form onsubmit="return confirm('Are you sure want to delete this?')" action="{{ route('admin.categories.destroy', $category) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            {{ $categories->links() }}
        </div>
    </section>

@endsection