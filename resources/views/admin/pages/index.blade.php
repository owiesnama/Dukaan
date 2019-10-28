@extends('adminlte::page')


@section('content')
    <section>
        <form action="{{ route('admin.pages.update') }}" method="post" class="form-horizontal col-lg-6">
            @csrf
            @method('patch')
            @foreach($pages as $page)
            <div class="form-group">
                <label class="control-label col-sm-4" for="body_{{ $page->slug }}">{{ $page->title }}</label>
                <div class="col-sm-8">
                    <textarea name="body[{{ $page->slug }}]" id="body_{{ $page->slug }}"
                              class="form-control" rows="8">{{ $page->body }}</textarea>
                </div>
            </div>
            @endforeach
            <div class="col-sm-8 col-sm-offset-4">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </section>

@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@stop
