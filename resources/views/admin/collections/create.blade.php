@extends('layouts.admin')


@section('content')

    <div class="container mt-2">
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
              class="row"
              enctype="multipart/form-data">

            <div class="col-sm-8">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label" for="name">@lang('general.Name')</label>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                                           class="form-control">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p>@lang('general.Visibility')</p>
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio"
                                           id="invisible-checkbox"
                                           name="visibility"
                                           class="custom-control-input">
                                    <label class="custom-control-label" for="invisible-checkbox">مخفية</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio"
                                           id="visible-checkbox"
                                           name="visibility"
                                           class="custom-control-input">
                                    <label class="custom-control-label" for="visible-checkbox">ظاهرة</label>
                                </div>

                                <div class="custom-control custom-checkbox mt-4">
                                    <input type="checkbox"
                                           id="featured-checkbox"
                                           name="featured"
                                           class="custom-control-input">
                                    <label class="custom-control-label" for="featured-checkbox">ظاهرة</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
