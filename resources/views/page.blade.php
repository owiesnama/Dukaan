@extends('layouts.shop')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <h1 class="text-center">@lang('general.' . $page->slug)</h1>
            {!! nl2br($page->body) !!}
        </div>
    </div>
@endsection
