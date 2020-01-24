@extends('layouts.admin')


@section('content')


    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        @lang('category.Update category'): <span class="text-blue">{{$category->name}}</span>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger flex">
                                <button type="button" class="close mx-2"  data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>

                            </div>
                        @endif
                        <form action="{{ route('admin.categories.update', $category) }}" method="post"
                              class="p-4form-horizontal">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label class="control-label" for="name">@lang('general.Name')</label>
                                <div>
                                    <input id="name"
                                           type="text"
                                           name="name"
                                           value="{{ $category->name?:old('name') }}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="desc">@lang('general.Description')</label>
                                <div>
                                    <textarea id="desc" name="desc"
                                              class="form-control">{{ $category->desc?:old('desc') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="parent">@lang('category.Belong to category')</label>
                                <div>
                                    <select id="parent" name="parent_id" class="form-control">
                                        <option value=""></option>
                                        @foreach($categories as $mainCategory)
                                            <option value="{{ $mainCategory->id }}" {{ $mainCategory->is($category->parent) ? 'selected': '' }}>{{ $mainCategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-info">@lang('general.Update')</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

