@extends('layouts.shop')

@section('content')
    <div class="py-24 pages">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1 class="text-center text-lg text-bold mb-12">@lang('general.' . $page->slug)</h1>
                    {!! nl2br($page->body) !!}
                </div>
            </div>
        </div>

    </div>

@endsection
