@extends('layouts.admin')


@section('content')


    <section class="container mt-2">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"></div>
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

                        <form action="{{ route('admin.categories.store') }}" method="post" class="p-4 form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="name">@lang('general.Name')</label>
                                <div>
                                    <input id="name"
                                           type="text"
                                           name="name"
                                           value="{{old('name') }}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="desc">@lang('general.Description')</label>
                                <div>
                                    <textarea id="desc" name="desc"
                                              class="form-control">{{old('desc') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="code">@lang('general.Code')</label>
                                <div>
                                    <input type="text" id="code" name="code"
                                              class="form-control" value="{{old('code') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="parent">@lang('category.Belong to category')</label>
                                <div>
                                    <select id="parent" name="parent_id" class="form-control">
                                        <option value=""></option>
                                        @foreach($categories as $mainCategory)
                                            <option value="{{ $mainCategory->id }}">{{ $mainCategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-info">@lang('general.Create')</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

