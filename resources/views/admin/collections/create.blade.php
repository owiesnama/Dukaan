@extends('layouts.admin')


@section('content')

    <div class="container mt-2">
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
                        <form action="{{ route('admin.products.store') }}"
                              method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="name">@lang('general.Name')</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="description">@lang('general.Description')</label>
                                <textarea id="description" name="description"
                                          class="form-control" rows="4">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="images">@lang('general.Cover image')</label>

                                <input type="file" id="images" name="images[]" multiple>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">@lang('general.Create')</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
