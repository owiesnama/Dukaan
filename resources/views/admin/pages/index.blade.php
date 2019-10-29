@extends('adminlte::page')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('admin.pages.update') }}" method="post" class="form-horizontal col-lg-6">
                @csrf
                @method('patch')
                @foreach($pages as $page)
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="body_{{ $page->id }}">{{ $page->title }}</label>
                        <div class="col-sm-8">
                    <textarea name="body[{{ $page->slug }}]" id="body_{{ $page->id }}"
                              rows="8" cols="150">{{ $page->body }}</textarea>
                        </div>
                    </div>
                @endforeach
                <div class="col-sm-8 col-sm-offset-4">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
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
