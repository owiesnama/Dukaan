@extends('layouts.admin')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        @foreach($pages as $page)
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 "
                                   id="{{$page->slug}}-tab" data-toggle="tab" href="#{{$page->slug}}" role="tab"
                                   aria-controls="{{$page->slug}}" aria-selected="true"><i
                                            class="ni ni-cloud-upload-96 mr-2"></i>{{$page->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card shadow">
                    <div class="card-body">


                        <form action="{{ route('admin.pages.update') }}" method="post" class="form-horizontal">
                            <div class="tab-content">

                                @csrf
                                @method('patch')
                                @foreach($pages as $page)
                                    <div id="{{$page->slug}}"
                                         class="tab-pane  fade in w-full">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2"
                                                   for="{{ $page->slug }}Editor">{{ $page->title }}</label>
                                            <div class="col-sm-10">
                                            <textarea name="body[{{ $page->slug }}]" id="{{ $page->slug }}Editor"
                                                      rows="10">{{ $page->body }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>


                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    @foreach($pages as $page)
CKEDITOR.replace('{{ $page->slug }}Editor');
    @endforeach
</script>
@endpush
