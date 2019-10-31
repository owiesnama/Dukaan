@extends('adminlte::page')


@section('content')
    <div class="container">
        <div class="row">
            <div class="panel">
                <div class="panel-body">
                    <ul class="nav nav-pills">
                        @foreach($pages as $page)
                            <li @if($pages->first() == $page ) class="active" @endif>
                                <a data-toggle="pill" href="#{{$page->slug}}" >
                                    {{$page->title}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel">
                <div class="panel-body">
                    <form action="{{ route('admin.pages.update') }}" method="post" class="form-horizontal">
                        @csrf
                        @method('patch')
                        <div class="tab-content">
                            @foreach($pages as $page)
                                <div id="{{$page->slug}}" class="tab-pane @if($pages->first() == $page ) active @endif fade in w-full">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2"
                                               for="body_{{ $page->id }}">{{ $page->title }}</label>
                                        <div class="col-sm-10">
                    <textarea name="body[{{ $page->slug }}]" id="body_{{ $page->id }}"
                              rows="300" cols="300">{{ $page->body }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@stop

@section('js')

    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        @foreach($pages as $page)
            CKEDITOR.replace('body_{{ $page->id }}');
        @endforeach
    </script>
@stop
