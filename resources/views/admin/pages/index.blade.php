@extends('layouts.admin')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        @foreach($pages as $page)
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0  @if($pages->first() == $page ) active @endif"
                                   id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                   aria-controls="{{$page->slug}}" aria-selected="true"><i
                                            class="ni ni-cloud-upload-96 mr-2"></i>{{$page->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            @foreach($pages as $page)
                                <div id="{{$page->slug}}"
                                     class="tab-pane @if($pages->first() == $page ) active @endif fade in w-full">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2"
                                               for="body_{{ $page->id }}">{{ $page->title }}</label>
                                        <div class="col-sm-10">
                                            <textarea name="body[{{ $page->slug }}]" id="body_{{ $page->id }}"
                                                      rows="10">{{ $page->body }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('admin.pages.update') }}" method="post" class="form-horizontal">
                            @csrf
                            @method('patch')
                            <div class="tab-content">
                                @foreach($pages as $page)
                                    <div id="{{$page->slug}}"
                                         class="tab-pane @if($pages->first() == $page ) active @endif fade in w-full">
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
    </div>
@endsection
@section('js')
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        @foreach($pages as $page)
            CKEDITOR.replace('body_{{ $page->id }}');
        @endforeach
    </script>
@endsection
